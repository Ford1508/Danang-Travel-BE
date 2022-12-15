<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Rating_post;
use Illuminate\Http\Request;

class RatingPostController extends Controller
{
    public function rateblog($id, Request $request){
        try {
            //code...
            $blog = Blog::findOrFail($id);
            $blog_id = $blog->id;
            if($blog->is_rating_by_auth($request->user_id)){
                $rate_blog = Rating_post::where('blog_id',$blog_id)->where('user_id',$request->user_id)->first();
                $rate_blog->rating = $request->rating;
                $rate_blog->save();
                $rating = $blog->Rating_post()->sum('rating');
                $num_rating = $blog->Rating_post()->count();
                $blograte = (int)$rating / $num_rating;
                $blog->rating = $blograte;
                $blog->save();
                return response()->json($rate_blog);
            }
            else
            {
                $rate_blog = new Rating_post;
                $rate_blog->blog_id = $blog_id;
                $rate_blog->user_id = $request->user_id;
                $rate_blog->rating = $request->rating;
                $rate_blog->save();
                $rating = $blog->Rating_post()->sum('rating');
                $num_rating = $blog->Rating_post()->count();
                $blograte = (int)$rating / $num_rating;
                $blog->rating = $blograte;
                $blog->save();
                return response()->json($rate_blog);
            }
            return response()->json(["error"=>"Please, correctly!"], 500);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(["error"=>"Please, fill in correctly!"], 500);
        }
    }

    public function unrateblog($id, Request $request){
        try {
            //code...
            $rate_blog = Rating_post::where('blog_id',$id)->where('user_id',$request->user_id);
            $rate_blog->delete();
            $blog = Blog::findOrFail($id);
            $blog_id = $blog->id;
            $rating = $blog->Rating_post()->sum('rating');
            $num_rating = $blog->Rating_post()->count();
            $blograte = (int)$rating / $num_rating;
            $blog->rating = $blograte;
            $blog->save();
            return response()->json(["message"=>"unrate_success"]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::findOrFail(1);
        $rateing = $blog->Rating_post()->sum('rating');
        $numrating = $blog->Rating_post()->count();
        $rating = (int)$rateing / $numrating;
        return response()->json($rating);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

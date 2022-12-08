<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Rating_comment;
use Illuminate\Http\Request;

class RatingCommentController extends Controller
{

    public function ratecomment($id, Request $request){
        try {
            //code...
            $comment = Comment::findOrFail($id);
            $comment_id = $comment->id;
            if($comment->is_rating_by_auth($request->user_id)){
                $rate_blog = Rating_comment::where('blog_id',$comment_id)->where('user_id',$request->user_id)->first();
                $rate_blog->rating = $request->rating;
                $rate_blog->save();
                return response()->json($rate_blog);
            }
            else
            {
                $rate_blog = new Rating_comment();
                $rate_blog->comment_id = $comment_id;
                $rate_blog->user_id = $request->user_id;
                $rate_blog->rating = $request->rating;
                $rate_blog->save();
                return response()->json($rate_blog);
            }
            return response()->json(["error"=>"Please, correctly!"], 500);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(["error"=>"Please, fill in correctly!"], 500);
        }
    }

    public function unratecomment($id, Request $request){
        try {
            //code...
            $rate_blog = Rating_comment::where('comment_id',$id)->where('user_id',$request->user_id);
            $rate_blog->delete();
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
        //
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

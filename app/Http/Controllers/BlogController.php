<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Blog::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            Blog::created($request->all());
            return response()->json(["Success"=>"Post Success!"], 200);
        }
        catch (Exception $e){
            return response()->json(["error"=>"Have error, retry again!"], 500);
        }
        //
//        $blog = new Blog;
//        $blog->name = $request->name;
//        $blog->description = $request->description;
//        $blog->rating = $request->rating;
//        $blog->image = $request->image;
//        $blog->user_id = $request->user_id;
//        $blog->created_at= $request->created_at;
//        $blog->updated_at = $request->updated_at;
//        try{
//            $blog->save();
//            return response()->json(new UserResource($user), 200);
//        }
//        catch (Exception $e){
//
//        }
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
        return Blog::find($id);
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
        $blog = Blog::findOrFail($id);
        $blog->update($request->all());

        return $blog;
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
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return 204;
    }
}

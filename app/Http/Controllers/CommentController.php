<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function blogcomment($id, Request $request){
        $blog = Blog::findOrFail($id);
        $blog_id = $blog->id;
        $comment = new Comment;
        $comment->blog_id = $blog_id;
        $comment->user_id = $request->user_id;
        $comment->body = $request->body;
        $comment->save();
        return response()->json($comment);
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(["message"=>"failed to create!"], 500);
        }
    }

    public function deletecomment($id, Request $request)
    {
        try {
            $blog = Blog::findOrFail($id);
            $blog_id = $blog->id;
            $comment = Comment::where('blog_id',$blog_id)->where('user_id',$request->user_id);
            $comment->delete();
            return response()->json(["message"=>"delete success!"]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function comments_by_blog($id){
        try {
            $blog = Blog::findOrFail($id);
            $blog_id = $blog->id;
            $comments = Comment::where('blog_id',$blog_id)->with('user')->with('rating_comment')->orderBy('id', 'desc')->get();
            return response()->json($comments);
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

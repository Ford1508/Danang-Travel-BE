<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

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
        // try{
        //     $blog = Blog::create($request->all());
        //     return response()->json(["Success"=>"Post Success!"], 200);
        // }
        // catch (\Exception $e){
        //     return response()->json(["error"=>"Have error, retry again!"], 500);
        // }
        //
        try{
            $blog = new Blog;
            $blog->name = $request->name;
            $blog->description = $request->description;
            $blog->address = $request->address;
            $blog->user_id = $request->user_id;
            $blog->category_id= $request->category_id;
            if($request->hasFile('image'))
            {
                $blog->image = $request->file('image')->store('images/blogs');
            }
            $blog->save();
            return response()->json($blog, 200);
        }
        catch (\Exception $e){
            return response()->json(["error"=>"Have error, retry again!"], 500);
        }
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
        $blog = Blog::find($id);
        return response()->json($blog,200);
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
        try{
            $blog = Blog::find($id);
            $blog->name = $request->name;
            $blog->description = $request->description;
            $blog->address = $request->address;
            $blog->user_id = $request->user_id;
            $blog->category_id= $request->category_id;
            if($request->hasFile('image'))
            {
                $blog->image = $request->file('image')->store('images/blogs');
            }
            $blog->save();
            return response()->json($blog, 200);
        }
        catch (\Exception $e){
            return response()->json(["error"=>"Have error, retry again!"], 500);
        }
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

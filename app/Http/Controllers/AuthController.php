<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function register(Request $request){
        // try {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->username = $request->username;
            $user->save();
            $user = User::find($user->id);
            return response()->json(new UserResource($user), 200);
        // } catch (\Exception $e) {
        //     return response()->json(["error"=>"Email or Username is already exists!"], 500);
        // }
    }
    
    public function login(Request $request){
        if(filter_var($request->email,FILTER_VALIDATE_EMAIL)){
            $user = User::where('email', $request->email)->first();
            if($request->email == "" || $request->password == ""){
                return response()->json(["error"=>"Email or password is empty!"], 404);
            }
            if(!$user || !Hash::check($request->password, $user->password)){
                return response()->json(["error"=>"Email or password is not matched"], 404);
            }
            return response()->json($user, 200);
        }
        else{
            $user = User::where('username', $request->username)->first();
            if($request->username == "" || $request->password == ""){
                return response()->json(["error"=>"Username or password is empty!"], 404);
            }
            if(!$user || !Hash::check($request->password, $user->password)){
                return response()->json(["error"=>"Username or password is not matched"], 404);
            }
            return response()->json($user, 200);
        }
    }


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

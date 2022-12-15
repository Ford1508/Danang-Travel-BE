<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserResource::collection(User::all());
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
        try {
            //code...
            $user = User::findOrFail($id);
            return new UserResource($user);
        } catch (\Throwable $th) {
            //throw $th;
        }
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
        try {
            //code...
            $user = User::where('id',$id)->first();
            ($request->name) ?  $user->name = $request->name:"";
            ($request->username) ?  $user->username = $request->username:"";
            ($request->email) ? $user->email = $request->email:"";
            ($request->gender) ? $user->gender = $request->gender:"";
            ($request->phone) ? $user->phone = $request->phone:"";
            ($request->user_type) ? $user->user_type = $request->user_type:"";
            if($request->hasFile('avatar')) 
            {
                $user->avatar = $request->file('avatar')->store('images/avatars');
            }
            ($request->birth) ? $user->birth = $request->birth:"";
            $user->save();
            return response()->json($user, 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(["error"=>"Please, fill in correctly!"], 500);
        }
    }

    public function change_password(Request $request){
        $input = array(
            // 'old_password' => $request->old_password,
            'new_password' => $request->new_password,
            'confirm_password' => $request->confirm_password,
        );
        $rule = array(
            // 'old_password' => 'required',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        );
        $validator = Validator::make($input, $rule);

        if($validator->fails()){
            return response()->json(['message'=>$validator->errors()->first()],404);
        } else {
            $user = User::findOrFail($request->user_id);
            // if((Hash::check($request->old_password, $user->password))== false){
            //     return response()->json(['message'=>"check your old password"]);
            if ((Hash::check($request->new_password, $user->password)) == true){
                return response()->json(['message'=>" please enter a new password"]);
            } else {
                $user->update(['password' => Hash::make($request->new_password)]);
                return response()->json($user, 200);
            }
            return response()->json(['message' => "User not found"]);
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
    }
}

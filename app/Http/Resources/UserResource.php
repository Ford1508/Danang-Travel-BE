<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' =>$this->id,
            'username' =>$this->username,
            'name' =>$this->name,
            'email' =>$this->email,
            'gender' =>$this->gender,
            'user_type' =>$this->user_type,
            'avatar' =>$this->avatar,
            'birth' =>$this->birth,
            'created_at' =>$this->created_at,
            'updated_at' =>$this->updated_at,
        ];
    }
}

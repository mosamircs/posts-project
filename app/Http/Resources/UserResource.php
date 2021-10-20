<?php

namespace App\Http\Resources;

use App\Http\Resources\Posts\PostResource;
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
            'posts'=>PostResource::collection($this->posts)->groupBy('user_id'),
        ];
    }
}

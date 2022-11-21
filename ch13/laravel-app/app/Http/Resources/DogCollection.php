<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class DogCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'breed' => $this->breed,
            // 이미 관계를 가지고 있는 경우에만 연관관계를 추가
            'bones' => BoneResource::collection($this->whenLoaded('bones')),
            // 또는 URL이 요청하는 경우에만 연관관계를 추가
            'bones' => $this->when(
                $request->get('include') == 'bones',
                BoneResource::collection($this->bones)
            ),
        ];
    }
}

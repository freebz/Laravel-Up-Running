// 예제 13-15 생성된 API 리소스 클래스

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Dog extends JsonResource
{
    /**
     * 리소스를 배열로 변환
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}

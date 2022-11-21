// 예제 13-22 조건에 따라 API 연관관계 불러들이기

public function toArray()
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

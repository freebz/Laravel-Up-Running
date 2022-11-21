// 예제 13-25 조건에 따라 속성 적용하기

public function toArray($request)
{
    return [
        'name' => $this->name,
        'breed' => $this->breed,
        'rating' => $this->when(Auth::user()->canSeeRatings(), 12),
    ];
}

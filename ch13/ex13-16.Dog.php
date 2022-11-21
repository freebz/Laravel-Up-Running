// 예제 13-16 Dog 모델용 단순 API 리소스 클래스

class Dog extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'breed' => $this->breed,
        ];
    }
}

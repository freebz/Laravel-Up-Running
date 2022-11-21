// 예제 13-20 Dog 모델용 단순 API 리소스 컬렉션

use App\Http\Resources\Dog as DogResource;

class DogCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'links' => [
                'self' => route('dogs.index'),
            ],
        ];
    }
}

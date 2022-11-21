// 예제 13-21 연관관계를 포함하는 간단한 API

use App\Http\Resources\Dog as DogResource;

class DogCollection extends ResourceCollection
{
    public function toArray()
    {
        return [
            'name' => $this->name,
            'breed' => $this->breed,
            'friends' => DogResource::collection($this->friends),
        ];
    }
}

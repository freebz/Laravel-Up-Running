// 예제 13-18 기본 API 리소스 컬렉션 메서드 사용하기

use App\Models\Dog;
use App\Http\Resources\Dog as DogResource;

Route::get('dogs', function () {
    return DogResource::collection(Dog::all());
});

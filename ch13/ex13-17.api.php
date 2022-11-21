// 예제 13-17 단순 Dog 리소스 활용

use App\Models\Dog;
use App\Http\Resources\Dog as DogResource;

Route::get('dogs/{dogId}', function ($dogId) {
    return new DogResource(Dog::find($dogId));
});

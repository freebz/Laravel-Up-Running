// 예제 5-7 엘로퀀트와 테이블명을 키로 하는 모델 팩토리 정의하기

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name;
        ];
    }
}

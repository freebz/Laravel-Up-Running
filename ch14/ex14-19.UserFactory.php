// 예제 14-19 Faker로 가짜 파일 반환하기

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'picture' => $this->faker->file(
                storage_path('tests'), // 소스 디렉터리
                storage_path('app'), // 타깃 디렉터리
                false // 전체 경로가 아닌 파일명만 반환
            ),
            'name' => $this->faker->name,
        ];
    }
});

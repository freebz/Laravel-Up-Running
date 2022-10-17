// 예제 5-8 간단한 팩토리 클래스 정의하기

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * 팩토리가 사용될 모델 클래스
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * 팩토리를 사용하여 정의될 모델 클래스의 속성값
     *
     * @return array
     */
    public function definition()
    {
        return [
            'home' => 'Lupita Smith',
            'email' => 'lupita@gmail.com',
        ];
    }
}

// 예제 5-11 시더에서 연관관계의 모델 생성하기

// ContactFactory.php 클래스 파일

use App\Models\Company;
...

public function definition()
{
    return [
        'name' => 'Lupia Smith',
        'email' => 'lupita@gmail.com',
        'company_id' => Company::factory(),
    ];
}

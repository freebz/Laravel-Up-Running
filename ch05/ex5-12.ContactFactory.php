// 예제 5-12 시더에서 다른 파라미터의 값 사용하기

// ContactFactory.php 클래스 파일

use App\Models\Company;

...


return [
    'name' => 'Lupita Smith',
    'email' => 'lupita@gmail.com',
    'company_id' => function () {
        return App\Models\Company::factory()->create()->id;
    },
    'company_size' => function ($contact) {
        // 바로 위에서 생성한 'company_id' 속성값을 사용한다.
        return App\Models\Company::find($contact['company_id'])->size;
    },
];

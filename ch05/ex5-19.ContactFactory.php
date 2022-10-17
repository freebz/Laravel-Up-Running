// 예제 5-19 시더에서 다른 파라미터의 값 사용하기

$factory->define(Contact::class, function (Faker\Generator $faker) {
    return [
        'name' => 'Lupita Smith',
        'email' => 'lupita@gmail.com',
        'company_id' => function () {
            return factory(App\Company::class)->create()->id;
        },
        'company_size' => function ($contact) {
            // 바로 위에서 생성한 'company_id' 속성값을 사용한다.
            return App\Company::find($contact['company_id'])->size;
        },
    ];
});

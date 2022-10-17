// 예제 5-18 시더에서 연관관계의 모델 생성하기

$factory->define(Contact::class, function (Faker\Generator $faker) {
    return [
        'name' => 'Lupita Smith',
        'email' => 'lupita@gmail.com',
        'company_id' => function () {
            return factory(App\Company::class)->create()->id;
        },
    ];
});

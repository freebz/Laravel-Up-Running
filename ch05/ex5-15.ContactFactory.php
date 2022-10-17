// 예제 5-15 간단한 팩토리 정의하기

$factory->define(Contact::class, function (Faker\Generator $faker) {
    return [
        'name' => 'Lupita Smith',
        'email' => 'lupita@gmail.com',
    ];
});

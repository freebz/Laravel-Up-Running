// 예제 5-20 동일한 모델에 대하여 state 메서드를 사용해 모델 팩토리 여러 개 정의하기

$factory->define(Contact::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});

$factory->state(Contact::class, 'vip', [
    'vip' => true,
]);

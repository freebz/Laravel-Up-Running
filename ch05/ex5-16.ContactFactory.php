// 예제 5-16 Faker를 사용해 간단한 모델 팩토리 정의하기

$factory->define(Contact::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});

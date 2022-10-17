// 예제 5-14 엘로퀀트와 테이블명을 키로 하는 모델 팩토리 정의하기

$factory->define(User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define('users', function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});

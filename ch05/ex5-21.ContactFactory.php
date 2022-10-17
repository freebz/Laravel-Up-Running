// 예제 5-21 팩토리 state에 클로저를 인자로 전달해 속성값 지정하기

$factory->state(Contact::class, 'vip', function (Faker\Generator $faker) {
    return [
        'vip' => true,
        'company' => $faker->company,
    ];
});

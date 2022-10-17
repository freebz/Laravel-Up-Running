// 예제 5-9 Faker를 사용해 definition 메서드 수정하기

public function definition()
{
    return [
        'name' => $this->faker->name,
        'email' => $this->faker->email,
    ];
}

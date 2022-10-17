<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * 팩토리가 사용될 모델 클래스
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     * 팩토리를 사용하여 정의될 모델 클래스의 속성값
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'home' => 'Lupita Smith',
            'email' => 'lupita@gmail.com',
        ];
    }
}

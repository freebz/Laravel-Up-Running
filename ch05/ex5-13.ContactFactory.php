// 예제 5-13 state 메서드를 호출하는 커스텀 메서드를 정의하기

public function vip()
{
    return $this->state(function (array $attributes) {
        return [
            'vip' => true,
        ];
    });
}

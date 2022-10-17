// 예제 5-45 모델에 속성값 형변환을 정의하는 방법

class Contact
{
    protected $casts = [
        'vip' => 'boolean',
        'children_names' => 'array',
        'birthday' => 'date',
    ];
}

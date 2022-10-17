// 예제 5-47 모델의 속성값 형변환 배열에 커스텀 형변환 클래스 지정

class User extends Model
{
    /**
     * 형변환이 되어야 하는 속성들
     *
     * @var array
     */
    protected $casts = [
        'options' => Json::class,
    ];
}

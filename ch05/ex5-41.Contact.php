// 예제 5-41 테이블에 존재하는 칼럼의 값에 접근할 때 추가 동작을 구현한 접근자

// 모델에서의 접근자 정의
class Contact extends Model
{
    public function getNameAttribute($value)
    {
        return $value ?: '(No name provided)';
    }
}

// 정의한 접근자 사용
$name = $contact->name;

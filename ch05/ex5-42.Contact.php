// 예제 5-42 테이블에 존재하지 않는 값에 접근하는 속성값을 접급자를 이용하여 정의하기

// 모델에서의 접근자 정의:
class Contact extends Model
{
    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}

// 정의한 접근자 사용
$fullName = $contact->full_name;

// 예제 5-57 연결을 통한 단일 연관관계 정의

class User extends Model
{
    public function phoneNumber()
    {
        return $this->hasOneThrough(PhoneNumber::class, Company::class);
    }
}

// 예제 5-56 연결을 통한 다수 연관관계 정의

class User extends Model
{
    public function phoneNumbers()
    {
        return $this->hasManyThrough(PhoneNumber::class, Contact::class);
    }
}

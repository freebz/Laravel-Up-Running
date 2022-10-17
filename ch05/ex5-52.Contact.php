// 예제 5-52 일대일 연관관계 정의

class Contact extends Model
{
    public function phoneNumber()
    {
        return $this->hasOne(PhoneNumber::class);
    }
}

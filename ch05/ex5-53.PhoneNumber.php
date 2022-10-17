// 예제 5-53 일대일 역방향 연관관계 정의하기

class PhoneNumber extends Model
{
    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}

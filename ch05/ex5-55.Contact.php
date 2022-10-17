// 예제 5-55 일대다 역방향 연관관계 정의하기

class Contact extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

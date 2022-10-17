// 예제 5-59 다대다 역방향 연관관계 정의

class Contact extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}

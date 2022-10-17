// 예제 5-54 일대다 연관관계 정의

class User extends Model
{
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}

// 예제 5-58 다대다 연관관계 정의

class User extends Model
{
    public function contacts()
    {
        return $this->belongsToMany(Contact::class);
    }
}

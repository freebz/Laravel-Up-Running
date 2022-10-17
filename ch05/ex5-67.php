// 예제 5-67 다형성 연관관계를 사용자에게 연결하도록 확장하기

class Star extends Model
{
    public function starrable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

class User extends Model
{
    public function stars()
    {
        return $this->hasMany(Star::class);
    }
}

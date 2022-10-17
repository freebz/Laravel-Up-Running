// 예제 5-64 다형성 연관관계 모델 정의

class Star extends Model
{
    public function starrable()
    {
        return $this->morphTo();
    }
}

class Contact extends Model
{
    public function stars()
    {
        return $this->morphMany(Star::class, 'starrable');
    }
}

class Event extends Model
{
    public function stars()
    {
        return $this->morphMany(Star::class, 'starrable');
    }
}

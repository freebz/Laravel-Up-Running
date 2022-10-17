// 예제 5-68 다대다 다형성 연관관계 정의

class Contact extends Model
{
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}

class Event extends Model
{
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}

class Tag extends Model
{
    public function contacts()
    {
        return $this->morphedByMany(Contact::class, 'taggable');
    }

    public function events()
    {
        return $this->morphedByMany(Event::class, 'taggable');
    }
}

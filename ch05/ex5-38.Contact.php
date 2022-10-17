// 예제 5-38 클로저를 사용해 글로벌 스코프를 추가하는 방법

...
class Contact extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('active', function (Builder $builder) {
            $builder->where('active', true);
        });
    }
}

// 예제 5-61 피벗 테이블에 필드 추가

public function contacts()
{
    return $this->belongsToMany(Contact::class)
                ->withTimestamps()
                ->withPivot('status', 'preferred_greeting');
}

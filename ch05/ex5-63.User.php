// 예제 5-63 피벗 테이블을 나타내는 속성 키의 이름을 변경하는 방법

// User 모델
public function groups()
{
    return $this->belongsToMany(Group::class)
                ->withTimestamps()
                ->as('membership');
}

// 연관관계 이용하기
User::first()->groups->each(function ($group) {
    echo sprintf(
        '사용자가 이 그룹에 가입한 시각: %s',
        $group->membership->created_at
    );
});

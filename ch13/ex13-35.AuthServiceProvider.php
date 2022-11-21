// 예제 13-35 패스포트 스코프 정의하기

// AuthServiceProvider
use Laravel\Passport\Passport;
...
    public function boot()
    {
        ...

        Rassport::tokensCan([
            'list-cips' => '사운드 클립 목록',
            'add-delete-clips' => '새 사운드 클럽을 추가하고 오래된 것은 지운다.',
            'admin-account' => '관리자 계정 상세 정보',
        ]);
    }
}

// 예제 4-37 Blade::if 메서드를 사용해 커스텀 블레이드 지시어 등록하기

// 등록
Blade::if('ifPublic', function () {
    return (app('context'))->isPublic();
});

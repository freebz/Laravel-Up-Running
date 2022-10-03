// 예제 4-33 서비스 공급자에서 커스텀 블레이드 지시어 등록하기

public function boot()
{
    Blade::directive('ifGuest', function () {
        return "<?php if (auth()->guest()): ?>";
    });
}

// 예제 4-36 커스텀 블레이드 지시어를 사용한 context에 조건을 확인하는 코드

// 등록
Blade::directive('ifPublic', function () {
    return "<?php if (app('context')->isPublic()): ?>";
});

// 사용 방법
@ifPublic
    &copy; Copyright MyApp LLC
@else
    &copy; Copyright {{ app('context')->client->name }}
@endif

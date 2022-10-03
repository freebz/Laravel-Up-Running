<!-- 예제 4-35 커스텀 블레이드 지시어를 사용하지 않고 context에 조건을 확인하는 코드 -->

@if (app('context')->isPublic())
    $copy; Copylright MyApp LLC
@else
    &copy; Copyright {{ app('context')->client->name }}
@endif

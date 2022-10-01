// 예제 3-38 CSRF 토큰

<form action="/tasks/5" method="POST">
    // PHP 코드로 csrf_field() 헬퍼 함수를 호출하거나
    <?php echo csrf_field(); ?>
    // 직접 _token 타입을 추가하거나
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    // @csrf 지시어를 사용하여 정의할 수 있다.
    @csrf
</form>

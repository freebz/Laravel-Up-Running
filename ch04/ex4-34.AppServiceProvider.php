// 예제 4-34 파라미터를 전달받을 수 있는 커스텀 블레이드 지시어 등록하기

// 지시어 등록
Blade:: directive('newlinesToBr', function ($expression) {
    return "<?php echo nl2br({$expression}); ?>";
});

// 사용 방법
<p>@newlinesToBr($message->body)</p>

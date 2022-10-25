// 예제 7-1 $request->all()

<!-- GET 뷰 파일의 내용 -->
<form method="post" action="/signup?utm=12345">
    @csrf
    <input type="text" name="first_name">
    <input type="submit">
</form>

// routes/web.php
Route::post('signup', function (Request $request) {
    var_dump($request->all());
});

// 출력 결과:
/**
 * [
 *     '_token' => 'CSRF token here',
 *     'first_name' => 'value',
 *     'utm' => 12345,
 * ]
 */

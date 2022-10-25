// 예제 7-9 라우트 파라미터에서 URL의 세그먼트를 변수로 받을 수 있다.

// routes/web.php
Route::get('users/{id}', function ($id) {
    // URL이 myapp.com/users/15/라면 $id는 15가 된다.
});

// 예제 3-20 Route::view() 메서드

// resources/views/welcome.blade.php 뷰 파일을 바로 렌더링하여 반환한다.
Route::view('/', 'welcome');

// 간단한 데이터를 바로 Route::view()에 전달한다.
Route::view('/', 'welcome', ['User' => 'Michael']);

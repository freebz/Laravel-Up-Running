// 예제 13-4 리소스 컨트롤러에 라우트 바인딩하기

// routes/api.php
Route::namespace('Api')->group(function () {
    Route::apiResource('dogs', 'DogController');
});

// 예제 13-43 대체 라우트 정의하기

// routes/api.php
Route::fallback(function () {
    return response()->json(['message' => '라우트를 찾을 수 없습니다.'], 404);
})->name('api.fallback.404');

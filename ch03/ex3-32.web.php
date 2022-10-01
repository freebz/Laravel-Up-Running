// 예제 3-32 묵시적 라우트 모델 바인딩 사용하기

Route::get('conferences/{conference}', function (Conference $conference) {
    return view('conferences.show')->with('conference', $conference);
});

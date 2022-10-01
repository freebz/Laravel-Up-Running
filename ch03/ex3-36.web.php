// 예제 3-36 명시적 라우트 모델 바인딩 사용하기

Route::get('events/{event}', function (Conference $event) {
    return view('events.show')->with('event', $event);
});

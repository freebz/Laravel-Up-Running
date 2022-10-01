// 예제 3-45 사용자 입력 값을 세션에 저장하고 디라이렉트하기

Route::get('form', function () {
    return view('form');
});

Route::post('form', function () {
    return redirect('form')
        ->withInput()
        ->with(['error' => true, 'message' => 'Whoops!']);
});

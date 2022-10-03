// 예제 4-24 뷰 함수를 사용해 데이터를 전달하는 간단한 방법

Route::get('passing-data-to-views', function () {
    return view('dashboard')
        ->with('key', 'value');
});

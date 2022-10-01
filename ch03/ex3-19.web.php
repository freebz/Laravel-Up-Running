// 예제 3-19 뷰에 변수 전달하기

Route::get('tasks', function () {
    return view('tasks.index')
        ->with('tasks', Task:all());
});

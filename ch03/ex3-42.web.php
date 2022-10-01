// 예제 3-42 redirect()->route()

Route::get('redirect', function () {
    return redirect()->route('conferences.index');
});

// 예제 7-5 $request->input()

Route::post('post-route', function (Request $request) {
    $userName = $request->input('name', 'Matt');
});

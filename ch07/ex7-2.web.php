// 예제 7-2 $request->except()

Route::post('post-route', function (Request $request) {
    var_dump($request->except('_token'));
});

// 출력 결과
/**
 * [
 *     'first_name' => 'value',
 *     'utm' => 12345
 * ]
 */

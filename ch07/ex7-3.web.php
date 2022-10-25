// 예제 7-3 $request->only()

Route::post('post-route', function (Request $request) {
    var_dump($request->only(['firstName', 'utm']));
});

// 출력 결과:
/**
 * [
 *     'firstName' => 'value',
 *     'utm' => 12345
 * ]
 */

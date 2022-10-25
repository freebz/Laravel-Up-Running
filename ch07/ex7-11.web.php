// 예제 7-11 [예제 7-10]의 전송 결과를 처리하는 예제

Route::post('form', function (Request $request) {
    var_dump($request->all());
});

// 출력 결과:
// [
//     "_token" => "token here",
//     "name" => "asdf",
//     "profile_picture" => UploadedFile {},
// ]

Route::post('form', function (Request $request) {
    if ($request->hasFile('profile_picture')) {
        var_dump($request->file('profile_picture'));
    }
});

// 출력 결과:
// UploadedFile (details)

// 예제 7-19 사용자의 입력 데이터 전체를 엘로퀀트 모델에 전달하여 인스턴스 생성

Route::post('posts', function (Request $request) {
    $newPost = Post::create($request->all());
});

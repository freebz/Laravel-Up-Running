// 예제 7-18 생성한 폼 요청 객체 사용

Route::post('comments', function (App\Http\Requests\CreateCommentRequest $request)
{
    // 댓글 저장
});

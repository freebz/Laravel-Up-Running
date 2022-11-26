// 예제 15-11 라우트에 메일러블 렌더링하기

Route::get('preview-assignment-created-mailable', function () {
    $trainer = Trainer::first();
    $trainee = Trainee::first();

    return new \App\Mail\AssignmentCreated($trainer, $trainee);
});

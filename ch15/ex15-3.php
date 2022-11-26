// 예제 15-3 메일러블을 전송하는 몇 가지 방법

// 단순 전송
Mail::to($user)->send(new AssignmentCreated($trainer, $trainee));

// CC/BCC/etc.와 함께
Mail::to($user1)
    ->cc($user2)
    ->bcc($user3)
    ->send(new AssignmentCreated($trainer, $trainee));

// 컬렉션을 이용해서
Mail::to('me@app.com')
    ->bcc(User:all())
    ->send(new AssignmentCreated($trainer, $trainee));

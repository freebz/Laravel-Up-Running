// 예제 3-9 라우트에 이름 지정하기

// routes/web.php 파일에서 name() 메서드를 호출해 이름 지정하기
Rooute::get('members/{id}', [MemberController::class, 'show'])->name('members.show');

// 뷰 파일에서 route() 헬퍼 함수를 사용해 위에서 정의한 라우트명으로 링크를
// 표시하는 방법
<a href="<?php echo route('members.show', ['id' => 14]); ?>">
// 출력은 다음과 같다.
<a href="http://myapp.com/members/14">

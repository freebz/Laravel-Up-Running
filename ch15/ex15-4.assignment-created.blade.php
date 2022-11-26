<!-- 예제 15-4 assignment created 이메일 템플릿 예제 -->

<!-- resources/views/emails/assignment-created.blade.php -->
<p>안녕하세요! {{ $trainee->name }}!</p>

<p>{{ $trainer->name }}으로부터 새 운동을 할당받았습니다.
지금 <a href="{{ route('training-dashboard') }}">대시보드</a>를 확인해보세요!

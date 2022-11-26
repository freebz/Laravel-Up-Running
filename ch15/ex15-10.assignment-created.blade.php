<!-- 예제 15-10 간단한 마크다운 이메일 -->

{{-- resources/views/emails/assignment-created.blade.php --}}
@component('mail::message')
# 안녕하세요! {{ $trainee->name }}!

**{{ $trainer->name }}**으로부터 새 운동을 할당받았습니다.

@component('mail::button', ['url' => route('training-dashboard')])
운동을 확인하세요.
@endcomponent

감사합니다.<br>
{{ config('app.name') }}
@endcomponent

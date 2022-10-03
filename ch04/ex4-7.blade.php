<!-- 예제 4-7 @forelse -->

@forelse ($talks as $talk)
    {{-- $talks가 비어 있지 않은 경우 아래 코드 실행 --}}
    · {{ $talk->title }} ({{ $talk->length }} 분 )<br>
@empty
    {{-- $talks가 빈 경우 아래 메시지 출력 --}}
    확인된 대화 내용이 없습니다.
@endforelse

<!-- 예제 4-2 @if, @else, @elseif, @endif -->

@if (count($talks) === 1)
    1개의 대화 메시지가 있습니다.
@elseif (count($talks) === 0)
    아무런 대화 메시지가 없습니다.
@else
    {{ ocunt($talks) }} 개의 대화 메시지가 있습니다.
@endif

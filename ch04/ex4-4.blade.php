<!-- 예제 4-4 @for와 @endfor -->

@for ($i = 0; $i < $talk-slotsCount(); $i++)
    숫자 {{ $i }}<br>
@endfor

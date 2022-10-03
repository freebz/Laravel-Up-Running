<!-- 예제 4-5 @foreach와 @endforeach -->

@foreach ($talks as $talk)
    · {{ $talk->title }} ({{ $talk->length }} 분)<br>
@endforeach

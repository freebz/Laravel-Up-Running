<!-- 예제 7-16 유효성 검증 오류 출력 -->

@if ($errors->any())
    <ul id="errors">
	@foreach ($errors->all() as $error)
	    <li>{{ $error }}</li>
	@endforeach
    </ul>
@endif

<!-- 예제 6-19 에러 메시지를 표시하는 코드 -->

// partials/errors.blade.php
@if ($errors->any())
    <div class="alert alert-danger">
	<ul>
	    @foreach ($errors as $error)
		<li>{{ $error }}</li>
	    @endforeach
	</ul>
    </div>
@endif

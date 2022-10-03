<!-- 예제 4-17 2개 이상의 슬롯을 컴포넌트에 전달하기 -->

@component('partials.modal')
    @slot('title')
	비밀번호 유효 검사 실패.
    @endslot

    <p>비밀번호가 유효하지 않습니다. 비밀번호는 다음과 같은 형식이어야 합니다. [...]</p>

    <p><a href="#">...</a></p>
@endcomponent

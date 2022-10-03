<!-- 예제 4-14 사용자 오류를 표시하는 모달 -->

<!-- resources/views/partials/modal.blade.php -->
<div class="modal">
    <div>{{ $body }}</div>
    <div class="close button etc">...</div>
</div>

<!-- 다른 템플릿 파일 -->
@include('partials.modal', [
    'body' => '<p>비밀번호가 유효하지 않습니다. 비밀번호는 다음과 같은 형식이어야 합니다. : [...]</p><p><a href="#">...</a></p>'
])


<!-- 예제 4-15 컴포넌트의 슬롯을 사용해 리팩터링한 코드 -->

<!-- resources/views/partials/modal.blade.php -->
<div class="modal">
    <div>{{ $slot }}</div>
    <div class="close button etc">...</div>
</div>

<!-- 다른 템플릿 파일 -->
@component('partials.modal')
    <p>비밀번호가 유효하지 않습니다. 비밀번호는 다음과 같은 형식이어야 합니다. : [...]</p>

    <p><a href="#">...</a></p>
@endcomponent


<!-- 예제 4-16 2개의 변수를 가지고 있는 모달 템플릿 -->

<!-- resources/views/partials/modal.blade.php -->
<div class="modal">
    <div class="modal-header">{{ $title }}</div>
    <div>{{ $slot }}</div>
    <div class="close button etc">...</div>
</div>


<!-- 예제 4-17 2개 이상의 슬롯을 컴포넌트에 전달하기 -->

@component('partials.modal')
    @slot('title')
	비밀번호 유효 검사 실패.
    @endslot

    <p>비밀번호가 유효하지 않습니다. 비밀번호는 다음과 같은 형식이어야 합니다. [...]</p>

    <p><a href="#">...</a></p>
@endcomponent

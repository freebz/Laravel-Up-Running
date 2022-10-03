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

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

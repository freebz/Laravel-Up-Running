<!-- 예제 4-16 2개의 변수를 가지고 있는 모달 템플릿 -->

<!-- resources/views/partials/modal.blade.php -->
<div class="modal">
    <div class="modal-header">{{ $title }}</div>
    <div>{{ $slot }}</div>
    <div class="close button etc">...</div>
</div>

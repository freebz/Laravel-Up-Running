<!-- 예제 4-31 뷰에서 주입된 서비스 객체를 사용하는 코드 -->

<div class="finances-display">
    {{ $analytics->getBalance() }} / {{ $analytics->getBudget() }}
</div>

<!-- 예제 4-32 뷰에서 서비스 객체를 바로 주입하기 -->

@inject('analytics', 'App\Services\Analytics')

<div class="finances-display">
    {{ $analytics->getBalance() }} / {{ $analytics->getBudget() }}
</div>

<!-- 예제 4-3 @unless와 @endunless -->

@unless ($user->hasPaid())
    결제 탭으로 전환하여 결제를 완료할 수 있습니다.
@endunless

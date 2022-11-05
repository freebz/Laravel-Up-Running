<!-- 예제 9-11 템플릿에서 특정 가드의 인증 확인하기 -->

@auth('trainess')
    // 인증된 사용자
@endauth

@guest('trainess')
    // 인증되지 않은 사용자
@endguest

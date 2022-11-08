// 예제 10-12 입력 값과 함께 이전 페이지로 돌려보내기

public function store()
{
    // 유효성 검증에 실패하면...
    return back()->withInput();
}

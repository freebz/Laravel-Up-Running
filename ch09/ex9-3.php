// 예제 9-3 컨트롤러에서 auth() 글로벌 헬퍼를 사용한 예

public function dashboard()
{
    if (auth()->guest()) {
        return redirect('sign-up');
    }

    return view('dashboard')
        ->with('user', auth()->user());
}

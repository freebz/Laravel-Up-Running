// 예제 6-15 페이지네이션 처리된 쿼리 빌더의 응답

// PostController
public function index()
{
    return view('posts.index', ['posts' => DB::table('posts')->paginate(20)]);
}

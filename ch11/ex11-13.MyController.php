// 예제 11-13 컨트롤러 메서드에 의존성 주입하기

...
class MyController extends Controller
{
    // 메서드 의존성은 라우트 파라미터 앞이나 뒤에 적어줄 수 있다.
    public function show(Logger $logger, $id)
    {
        // 코드
        $logger->error('Something happened');
    }
}

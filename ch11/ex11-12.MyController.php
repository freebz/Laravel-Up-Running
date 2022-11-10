// 예제 11-12 컨트롤러의 생성자 메서드에 의존성 주입하기

...
class MyController extends Controller
{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function index()
    {
        // 코드
        $this->logger->error('Something happened');
    }
}

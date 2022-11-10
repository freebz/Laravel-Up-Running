// 예제 11-18 테스트 클래스 내에서 사용되는 모든 메서드를 위해 바인딩을 덮어 쓰자

class TestCase extends \Illuminate\Foundation\Testing\TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        app()->bind('whatever', 'whatever else');
    }
}

// 예제 12-5 PHPUnit 메서드 이름 짓기

use PHPUnit\Framework\TestCase;

class NamingTest extends TestCase
{
    public function test_it_names_things_well()
    {
        // 이 테스트 코드는 실행됨
    }

    public function testNamesThingsWell()
    {
        // 이 테스트 코드는 실행됨
    }

    /** @test */
    public function it_names_things_well()
    {
        // 이 테스트 코드는 실행됨
    }

    public function it_names_things_well2()
    {
        // 이 테스트 코드는 실행 안 됨
    }
}

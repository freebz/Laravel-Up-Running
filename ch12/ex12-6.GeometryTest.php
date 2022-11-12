// 예제 12-6 간단한 유닛 테스트

use PHPUnit\Framework\TestCase;
class GeometryTest extends TestCase
{
    public function test_it_calculates_area()
    {
        $square = new Square();
        $square->sideLength = 4;

        $calculator = new GeometryCalculator;

        $this->assertEquals(16, $calculator->area($square));
    }
}

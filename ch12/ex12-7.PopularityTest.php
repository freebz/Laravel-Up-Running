// 예제 12-7 조금 더 복잡한 유닛 테스트

use Tests\TestCase;
class PopularityTest extends TestCase
{
    use RefreshDatabase;

    public function test_votes_matter_more_than_views()
    {
        $package1 = Package::make(['votes' => 1, 'views' => 0]);
        $package2 = Package::make(['votes' => 0, 'views' => 1]);

        $this->assertTrue($package1->popularity > $package2->popularity);
    }
}

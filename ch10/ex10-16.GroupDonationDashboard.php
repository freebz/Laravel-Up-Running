// 예제 10-16 Responsable을 사용해서 뷰 객체 만들기

...
use Illuminate\Contracts\Support\Responsable;

class GroupDonationDashboard implements Responsable
{
    public function __construct($group)
    {
        $this->group = $group;
    }

    public function budgetThisYear()
    {
        // ...
    }

    public function giftsThisYear()
    {
        // ...
    }

    public function toResponse()
    {
        return view('groups.dashboard')
            ->with('annual_budget', $this->budgetThisYear())
            ->with('annual_gifts_received', $this->giftsThisYear());
    }
}

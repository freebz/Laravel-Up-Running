class DashboardController extends Controllers
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('admin-auth')
            ->only('editUsers');
        
        $this->middleware('team-member')
            ->except('editUsers');
    }
}
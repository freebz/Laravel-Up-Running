// 예제 9-21 authorizeResource()의 인가-메서드 매핑

...
class ContactController extends Controller
{
    public function __construct()
    {
        // 이렇게 호출하면 아래 메서드 전체를 호출하는 것과 같다.
        // 개별 메서드의 authorized() 호출을 모두 제거할 수 있다.
        $this->authorizeResource(Contact::class);
    }

    public function index()
    {
        $this->authorize('viewAny', Contact::class);
    }

    public function create()
    {
        $this->authorize('create', Contact::class);
    }

    public function store(Request $request)
    {
        $this->authorize('create', Contact::class);
    }

    public function show(Contact $contact)
    {
        $this->authorize('view', $contact);
    }

    public function edit(Contact $contact)
    {
        $this->authorize('update', $contact);
    }

    public function update(Request $request, Contact $contact)
    {
        $this->authorize('update', $contact);
    }

    public function destroy(Contact $contact)
    {
        $this->authorize('delete', $contact);
    }
}

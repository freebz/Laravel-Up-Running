// 예제 13-3 Dog 엔티티용 API 리소스 컨트롤러 예시

class DogController extends Controller
{
    public function index()
    {
        return Dog::all();
    }

    public function store(Request $request)
    {
        return Dog::create($request->only(['name', 'breed']));
    }

    public function show($id)
    {
        return Dog::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $dog = Dog::findOrFail($id);
        $dog->update($request->only(['name', 'breed']));
        return $dog;
    }

    public function destroy($id)
    {
        Dog::findOrFail($id)->delete();
    }
}

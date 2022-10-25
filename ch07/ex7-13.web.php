// 예제 7-13 Request 객체에서 유효성 검증을 확인하는 기본적인 방법

// routes/web.php
Route::get('recipes/create', 'RecipeController@create');
Route::post('recipes', 'RecipeController@store');

// app/Http/Controller/RecipeController.php
class RecipeController extends Controller
{
    public function create()
    {
        return view('recipes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:recipes|max:125',
            'body' => 'required'
        ]);

        // 입력한 값이 문제가 없다면, 이를 저장한다.
    }
}

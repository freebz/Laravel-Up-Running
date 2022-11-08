// 예제 10-2 요청 객체를 받기 위해 컨테이너가 처리하는 메서드에 타입힌트하기


use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $allInput = $request->all();
    }
}

// 예제 6-17 직접 페이지네이터 생성하기

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

Route::get('people', function (Request $request) {
    $people = [...]; // 사람들의 목록

    $perPage = 15;
    $offsetPages = $request->input('page', 1) - 1;

    // 페이지네이터가 데이터를 잘라주지 않으므로 직접 처리해야 한다.
    $people = array_slice(
        $people,
        $offsetPages * $perPage,
        $perPage
    );

    return new Paginator(
        $people,
        $perPage
    );
});

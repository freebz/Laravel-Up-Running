// 예제 13-12 JSON-API 방식 정렬

// ?sort=name,-weight 처리
Route::get('dogs', function (Request $request) {
    // 쿼리 파라미터를 가져와서 쉼표(,)를 기준으로 나누어 배열로 만든다.
    $sorts = explode(',', $request->input('sort', ''));

    // 쿼리를 만든다.
    $query = Dog::query();

    // 하나씩 정렬을 추가한다.
    foreach ($sorts as $sortColumn) {
        $sortDirection = Str::startsWith($sortColumn, '-') ? 'desc' : 'asc';
        $sortColumn = ltrim($sortColumn, '-');

        $query->orderBy($sortColumn, $sortDirection);
    }

    // 결과를 되돌려준다.
    return $query->paginate(20);
});

// 예제 13-11 방향을 조절할 수 있는 단일 칼럼 API 정렬

// /dogs?sort=name와 /dogs?sort=-name 처리
Route::get('dogs', function (Request $request) {
    // 정렬 쿼리 파라미터를 받는다(없으면 'name'으로 정렬한다).

    $sortColumn = $request->input('sort', 'name');

    // 라라벨의 Str::startsWith() 메서드를 이용하여
    // 정렬하고자 하는 칼럼 문자열이 '-'로 시작하는지에 따라 정렬 방향을 설정한다.
    $sortDirection = Str::startsWith($sortColumn, '-') ? 'desc' : 'asc';
    $sortColumn = ltrim($sortColumn, '-');

    return Dog::orderBy($sortColumn, $sortDirection)
        ->paginate(20);
});

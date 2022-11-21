// 예제 13-10 가장 간단한 API 정렬

// /dogs?sort=name 처리
Route::get('dogs', function (Request $request) {
    // 정렬 쿼리 파라미터를 받는다(없으면 'name'으로 정렬한다).
    $sortColumn = $request->input('sort', 'name');
    return Dog::orderBy($sortColumn)->paginate(20);
});

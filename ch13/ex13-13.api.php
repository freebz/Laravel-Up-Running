// 예제 13-13 API 결과에 대한 단일 필터

Route::get('dogs', function () {
    $query = Dog::query();

    $query->when(request()->filled('filter'), function ($query) {
        [$criteria, $value] = explode(':', request('filter'));
        return $query->where($criteria, $value);
    });

    return $query->paginate(20);
});

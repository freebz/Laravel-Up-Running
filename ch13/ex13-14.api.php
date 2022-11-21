// 예제 13-14 API 결과에 대한 다중 필터

Route::get('dogs', function (Request $request) {
    $query = Dog::query();

    $query->when(request()->filled('filter'), function ($query) {
        $filters = explode(',', request('filter'));

        foreach ($filters as $filter) {
            [$criteria, $value] = explode(':', $filter);
            $query->where($criteria, $value);
        }

        return $query;
    });

    return $query->paginate(20);
});

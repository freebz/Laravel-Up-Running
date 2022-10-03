// 예제 4-30 라우트의 타입힌트를 통해 서비스를 주입하고 뷰에 데이터로 넘기기

Route::get('backend/sales', function (AnalyticsService $analytics) {
    return view('backend.sales-graphs')
        ->with('analytics', $analytics);
});

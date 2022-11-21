// 예제 13-8 쿼리 빌더 호출에 paginate() 메서드 사용하기

Route::get('dogs', function () {
    return DB::table('dogs')->paginate(20);
});

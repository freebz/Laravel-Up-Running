// 예제 13-23 API 리소스 컬렉션에 페이지네이터 객체 전달하기

Route::get('dogs', function () {
    return new DogCollection(Dog::paginate(20));
});

// 예제 5-51 라우트에서 직접 JSON으로 반환하기

// routes/web.php
Route::get('api/contacts', function () {
    return Contact::all();
});

Route::get('api/contacts/{id}', function ($id) {
    return Contact::findOrFail($id);
});

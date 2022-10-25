// 예제 7-8 $request->input()을 사용하여 JSON 데이터를 조회하는 방법

POST /post-route HTTP/1.1
Content-Type: application/json

{
    "firstName": "Joe",
    "lastNmae": "Schmoe",
    "spouse": {
        "firstName": "Jill",
        "lastName": "Schmoe"
    }
}

// Post-route
Route::post('post-route', function (Request $request) {
    $firstName = $request->input('spouse.firstNaqme');
});

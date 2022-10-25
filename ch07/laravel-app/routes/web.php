<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('signup', function (Request $request) {
    var_dump($request->all());
});

Route::post('post-route', function (Request $request) {
    var_dump($request->except('_token'));
});

Route::post('post-route', function (Request $request) {
    var_dump($request->only(['firstName', 'utm']));
});

Route::post('post-route', function (Request $request) {
    if ($request->has('utm')) {
        // 필요한 로직을 구현
    }
});

Route::post('post-route', function (Request $request) {
    $userName = $request->input('name', 'Matt');
});

Route::post('post-route', function (Request $request) {
    $method = $request->method();

    if ($request->isMethod('post')) {
        // HTTP POST 요청이라면 로직 처리
    }
});

Route::post('employees', function (Request $request) {
    $employeeZeroFirstName = $request->input('employees.0.firstName');
    $allLastNames = $request->input('employees.*.lastName');
    $employeeOne = $request->input('employees.1');
    var_dump($employeeZeroFirstname, $allLastNames, $employeeOne);
});

Route::post('post-route', function (Request $request) {
    $firstName = $request->input('spouse.firstNaqme');
});

Route::get('users/{id}', function ($id) {
    // URL이 myapp.com/users/15/라면 $id는 15가 된다.
});

Route::post('form', function (Request $request) {
    var_dump($request->all());
});

// 출력 결과:
// [
//     "_token" => "token here",
//     "name" => "asdf",
//     "profile_picture" => UploadedFile {},
// ]

Route::post('form', function (Request $request) {
    if ($request->hasFile('profile_picture')) {
        var_dump($request->file('profile_picture'));
    }
});

// 출력 결과:
// UploadedFile (details)

Route::get('recipes/create', 'RecipeController@create');
Route::post('recipes', 'RecipeController@store');

Route::post('comments', function (App\Http\Requests\CreateCommentRequest $request)
{
    // 댓글 저장
});

Route::post('posts', function (Request $request) {
    $newPost = Post::create($request->all());
});

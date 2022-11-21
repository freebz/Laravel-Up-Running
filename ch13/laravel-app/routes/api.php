<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->group(function () {
    Route::apiResource('dogs', 'DogController');
});

Route::get('dogs', function () {
    return response(Dog::all())
        ->header('X-Greatness-Index', 12);
});

Route::get('dogs', function (Request $request) {
    var_dump($request->header('Accept'));
});

Route::get('dogs', function () {
    return Dog::paginate(20);
});

Route::get('dogs', function () {
    return DB::table('dogs')->paginate(20);
});

// /dogs?sort=name 처리
Route::get('dogs', function (Request $request) {
    // 정렬 쿼리 파라미터를 받는다(없으면 'name'으로 정렬한다).
    $sortColumn = $request->input('sort', 'name');
    return Dog::orderBy($sortColumn)->paginate(20);
});

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

// ?sort=name,-weight 처리
Route::get('dogs', function (Request $request) {
    // 쿼리 파라미터를 가져와서 쉼표(,)를 기준으로 나누어 배열로 만든다.
    $sorts = explode(',', $request->input('sort', ''));

    // 쿼리를 만든다.
    $query = Dog::query();

    // 하나씩 정렬을 추가한다.
    foreach ($sorts as $sortColumn) {
        $sortDirection = Str::startsWith($sortColumn, '-') ? 'desc' : 'asc';
        $sortColumn = ltrim($sortColumn, '-');

        $query->orderBy($sortColumn, $sortDirection);
    }

    // 결과를 되돌려준다.
    return $query->paginate(20);
});

Route::get('dogs', function () {
    $query = Dog::query();

    $query->when(request()->filled('filter'), function ($query) {
        [$criteria, $value] = explode(':', request('filter'));
        return $query->where($criteria, $value);
    });

    return $query->paginate(20);
});

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


use App\Models\Dog;
use App\Http\Resources\Dog as DogResource;

Route::get('dogs/{dogId}', function ($dogId) {
    return new DogResource(Dog::find($dogId));
});

Route::get('dogs', function () {
    return DogResource::collection(Dog::all());
});

Route::get('dogs', function () {
    return new DogCollection(Dog::paginate(20));
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::get('clips', function () {
    // 액세스 토큰이 'list-clips'와 'add-delete-clips' 스코프 둘 다 가지고 있다.
})->middleware('scopes:list-clips,add-delete-clips');

// 또는

Route::get('clips', function () {
    // 액세스 토큰이 나열된 스코프 중 하나를 가지고 있다.
})->middleware('scope:list-clips,add-delete-clips');


Route::prefix('api')->middleware('auth:api')->group(function () {
    //
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'device_name' => 'required'
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return $user->createToken($request->device_name)->plainTextToken;
});


Route::fallback(function () {
    return response()->json(['message' => '라우트를 찾을 수 없습니다.'], 404);
})->name('api.fallback.404');

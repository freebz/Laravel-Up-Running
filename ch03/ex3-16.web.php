// 예제 3-16 라우트 그룹의 네임스페이스 지정하기

use App\Http\Controllers\UserController;

// App\Http\Controllers\UserController
Route::get('/', [UserController::class, 'index']);

Route::namespace('App\Http\Controllers\Dashboard')->group(function () {
    // App\Http\Controllers\Dashboard\PurchaseController
    Route::get('dashboard/purchases', 'PurchaseController@index');
});

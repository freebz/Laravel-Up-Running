// 예제 3-25 기보넞ㄱ인 컨트롤러 액션을 바인딩한 라우트

// routes/web.php

use App\Http\Controllers\TaskController;

Route::get('tasks/create', [TaskController::class, 'create']);
Route::post('tasks', [TaskController::class, 'store']);

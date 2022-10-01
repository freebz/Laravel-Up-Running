// 예제 3-29 API 리소스 컨트롤러 바인딩

// routes/api.php

use App\Http\Controllers\TaskController;

Route::apiResource('tasks', TaskController::class);

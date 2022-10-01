// 예제 3-28 리소스 컨트롤러 연결하기

// routes/web.php

use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class);

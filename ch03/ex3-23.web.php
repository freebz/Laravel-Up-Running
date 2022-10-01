// 예제 3-23 컨트롤러를 위한 라우트 예시

// routes/web.php
<?php

use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index']);

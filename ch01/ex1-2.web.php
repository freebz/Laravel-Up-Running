// 예제 1-2 컨트롤러로 표현한 Hello, World 출력 코드

// routes/web.php 파일
<?php

use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index']);


// app/Http/Controllers/WelcomeController.php 파일
<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function index()
    {
        return 'Hello, World!';
    }
}

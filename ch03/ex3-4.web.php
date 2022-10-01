// 예제 3-4 컨트롤러 메서드를 호출하는 방식의 라우트

use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index']);

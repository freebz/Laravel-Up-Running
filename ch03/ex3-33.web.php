// 예제 3-33 라우트 모델 바인딩에서 사용되는 엘로펀트 모델 키 지정

use App\Models\Post;

Route::get('posts/{post:slug}', function (Post $post) {
    return $post;
}

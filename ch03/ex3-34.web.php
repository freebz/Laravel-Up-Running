// 예제 3-34 엘로퀀트 모델을 여러 개 바인딩하면서 연관관계의 쿼리 범위를 지정하는 경우

use App\Models\Post;
use App\Models\User;

Route::get('users/{user}/posts/{post:slug}', function (User $user, Post $post) {

    // $user는 다음의 쿼리를 수행한 결과이다.
    // {user}는 URL 세그먼트 값이다.
    // User::find({user})->first();

    // $post는 다음의 쿼리를 수행한 결과이다.
    // {slug}는 URL 세그먼트 값이다.
    // User::find({user})->posts()->where('slug', {slug})->first();

    return $post;
}

// 예제 4-28 뷰 컴포저 클래스 파일

<?php

namespace App\Http\ViewComposers;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class RecentPostsComposer
{
    public function compose(View $view)
    {
        $view->with('recentPosts', Post::recent());
    }
}

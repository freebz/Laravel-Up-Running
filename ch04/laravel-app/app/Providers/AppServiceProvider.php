<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    // 서비스 공급자의 boot 메서드
    public function boot()
    {
        //
        // AppServiceProvider@boot
        Blade::component('partials.modal', 'modal');

        // 예제 4-26 변수를 전역으로 공유하기
        view()->share('recentPosts', Post::recent());

        // 예제 4-27 클로저를 사용해 특정 뷰에 변수를 공유하기
        view()->composer('partials.sidebar', function ($view) {
            $view->with('recentPosts', Post::recent());
        });

        view()->composer(
            'partials.sidebar',
            \App\Http\ViewComposers\RecentPostsComposer::class
        );

        // 예제 4-33 서비스 공급자에서 커스텀 블레이드 지시어 등록하기
        Blade::directive('ifGuest', function () {
            return "<?php if (auth()->guest()): ?>";
        });

        // 예제 4-34 파라미터를 전달받을 수 있는 커스텀 블레이드 지시어 등록하기
        // 지시어 등록
        Blade:: directive('newlinesToBr', function ($expression) {
            return "<?php echo nl2br({$expression}); ?>";
        });

        // 예제 4-36 커스텀 블레이드 지시어를 사용한 context에 조건을 확인하는 코드
        // 등록
        Blade::directive('ifPublic', function () {
            return "<?php if (app('context')->isPublic()): ?>";
        });

        // 예제 4-37 Blade::if 메서드를 사용해 커스텀 블레이드 지시어 등록하기
        // 등록
        Blade::if('ifPublic', function () {
            return (app('context'))->isPublic();
        });
    }
}

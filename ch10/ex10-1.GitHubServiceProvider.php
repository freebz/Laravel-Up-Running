// 예제 10-1 서비스 프로바이더의 등록을 지연시키기

...
use Illuminate\Contracts\Support\DeferrableProvider;

class GitHubServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function register()
    {
        $this->app->singleton(GitHubClient::class, function ($app) {
            return new GitHubClient();
        });
    }

    public function provides()
    {
        return [
            GitHubClient::class,
        ];
    }
}

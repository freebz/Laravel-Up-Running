// 예제 9-26 AuthServiceProvider에 정책 등록하기

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Contact::class => ContactPolicy::class,
    ];
}

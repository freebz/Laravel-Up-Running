// 예제 9-15 contact를 수정하는 어빌리티 예시

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('update-contact', function ($user, $contact) {
            return $user->id == $contact->user_id;
        });
    }
}

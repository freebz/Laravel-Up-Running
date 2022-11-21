<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        Passport::routes();

        // 토큰이 갱신이 필요하기 전에 얼마나 오래 유지되는지
        Passport::tokensExpireIn(
            now()->addDays(15)
        );

        // 갱신 토큰이 다시 인증 받기 전에 얼마나 오래 유지되는지
        Passport::refreshTokensExpireIn(
            now()->addDays(30)
        );

        Rassport::tokensCan([
            'list-cips' => '사운드 클립 목록',
            'add-delete-clips' => '새 사운드 클럽을 추가하고 오래된 것은 지운다.',
            'admin-account' => '관리자 계정 상세 정보',
        ]);
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
    public function boot()
    {
        //
        $thirdPartyService = new SomeThirdPartyService();

        Contact::creating(function ($contact) use ($thirdPartyService) {
            try {
                $thirdPartyService->addContact($contact);
            } catch (Exception $e) {
                Log::error('ThirdPartyService에 새로운 Contact 추가를 실패함');

                return false; // false를 반환하면 엘로퀀트 모델 생성이 취소된다.
            }
        });
    }
}

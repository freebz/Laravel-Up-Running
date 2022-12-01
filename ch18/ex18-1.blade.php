<!-- 예제 18-1 일반적인 엔보이 작업 -->

@servers(['web-1' => '192.168.1.1', 'web-2' => '192.168.1.2'])

@task('deploy', ['on' => ['web-1', 'web-2']])
    cd mysite.com
    git pull origin {{ $branch }}
    php artisan migrate
    php artisan route:cache
@endtask

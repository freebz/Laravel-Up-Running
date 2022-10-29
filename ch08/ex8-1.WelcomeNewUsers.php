// 예제 8-1 기본적인 아티즌 명령어 클래스

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WelcomeNewUsers extends Command
{
    /**
     * 다음의 시그니처를 사용하여 실행된다.
     *
     * @var string
     */
    protected $signature = 'email:newusers';

    /**
     * 이 명령어에 대한 설명
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * 새로운 명령어 클래스 인스턴스를 생성한다.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * 명령어를 실행한다.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }
}

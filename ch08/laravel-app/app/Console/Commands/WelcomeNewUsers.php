<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WelcomeNewUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:newusers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public function __construct(UserMailer $userMailer)
    {
        parent::__construct();

        $this->userMailer = $userMailer;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        User::signedUpThisWeek()->each(function ($user) {
            Mail::to($user)->send(new WelcomeEmail);
        });

        $this->userMailer->welcomeNewUsers();



        // 명령어의 이름을 포함한 모든 인자를 배열로 조회한다.
        $arguments = $this->arguments();

        // 'userId' 인자의 값만 조회한다.
        $userId = $this->argument('userId');

        // 기본값을 포함한 모든 인자를 배열로 조회한다.
        $options = $this->options();

        // 'sendEmail' 옵션 값만 조회한다.
        $sendEmail = $this->option('sendEmail');



        $email = $this->ask('이메일 주소는 무엇인가요?');

        $password = $this->secret('데이터베이스 암호는 무엇인가요?');

        if ($this->confirm('테이블을 모두 삭제하시겠습니까?')) {
            //
        }

        $album = $this->anticipate('최고의 앨범은 무엇이라고 생각하시나요?', [
            "The Joshua Tree", "Pet Sounds", "What's Going On"
        ]);

        $winner = $this->choice(
            '최고의 축구 팀은 어느 팀인가요?',
            ['맨체스터 유나이티드', '바로셀로나', '레알 마드리드'],
            0
        );

        $winner = $this->choice(
            '최고의 축구 팀은 어느 팀인가요?',
            ['manutd' => '맨체스터 유나이티드', 'barcelona' => '바로셀로나', 'realmadrid' => '레알 마드리드'],
            'manutd'
        );



        $this->info('Your command has run successfully.');

        $headers = ['이름', '이메일'];
        $data = [
            ['Dhriti', 'dhriti@amrit.com'],
            ['Moses', 'moses@gutierez.com'],
        ];

        // 데이터베이스에서 비슷한 데이터를 가져올 수도 있다.
        $data = App\Models\User::all(['name', 'email'])->toArray();

        $this->table($headers, $data);



        $totalUnits = 350;
        $this->output->progressStart($totalUnits);

        for ($i = 0; $i < $totalUnits; $i++) {
            sleep(1);

            $this->output->progressAdvance();
        }

        $this->output->progressFinish();



        $this->callSilent('password:reset', [
            'userId' => 15,
        ]);
    }
    
}

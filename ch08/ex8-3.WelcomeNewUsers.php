// 예제 8-3 구조가 변경된 아티즌 명령어

...
class WelcomeNewUsers extends Command
{
    public function __construct(UserMailer $userMailer)
    {
        parent::__construct();

        $this->userMailer = $userMailer;
    }

    public function handle()
    {
        $this->userMailer->welcomeNewUsers();
    }
}

// 예제 8-2 아티즌 명령어 클래스의 handle() 메서드 예제

...
class WelcomeNewUsers extends Command
{
    public function handle()
    {
        User::signedUpThisWeek()->each(function ($user) {
            Mail::to($user)->send(new WelcomeEmail);
        });
    }
}

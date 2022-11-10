// 예제 11-10 타입힌팅과 인터페이스에 바인딩하기

...
use Interfaces\Mailer as MailerInterface;

class UserMailer
{
    protected $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }
}

// Service Provider
public function register()
{
    $this->app->bind(\Interfaces\Mailer::class, function () {
        return new MailgunMailer(...);
    });
}

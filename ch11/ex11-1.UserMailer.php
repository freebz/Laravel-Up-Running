// 예제 11-1 기본 의존성 주입

<?php

class UserMailer
{
    protected $mailer;

    public function __constructor(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function welcome($user)
    {
        return $this->mailer->mail($user->email, 'Welcome!');
    }
}

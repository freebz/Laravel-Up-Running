// 예제 15-1 생성된 메일러블 PHP 클래스

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AssignmentCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * 새로운 메시지 인스턴스 생성하기
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * 메시지 생성
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }
}

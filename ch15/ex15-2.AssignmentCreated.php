// 예제 15-2 메일러블 예시

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AssignmentCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $trainer;
    public $trainee;
    
    public function __construct($trainer, $trainee)
    {
        $this->trainer = $trainer;
        $this->trainee = $trainee;
    }

    public function build()
    {
        return $this->subject($this->trainer->name . '으로부터 새 운동이 할당되었습니다.')
                    ->view('emails.assignment-created');
    }
}

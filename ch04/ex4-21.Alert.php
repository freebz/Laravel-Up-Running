// 예제 4-21 데이터를 전달받는 컴포넌트 클래스

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $message;
    
    public function __construct($type, $message)
    {
        $this->type = $type;
        $this->message = $message;
    }
    
    public function render()
    {
        return view('components.alert');
    }
}

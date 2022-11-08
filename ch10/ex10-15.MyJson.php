// 예제 10-15 단순한 Responsable 객체 만들기

...
use Illuminate\Contracts\Support\Responsable;

class MyJson implements Responsable
{
    protected $content;

    public function __construct($content)
    {
        $this->content = $content;
    }

    public function toResponse()
    {
        return response(json_encode($this->content))
            ->widthHeaders(['Content-Type' => 'application/json']);
    }
}

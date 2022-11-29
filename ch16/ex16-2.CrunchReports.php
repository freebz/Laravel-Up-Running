// 예제 16-2 잡 클래스 예제

...
use App\ReportGenerator;

class CrunchReports implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function handle(ReportGenerator $generator)
    {
        $generator->generateReportsForUser($this->user);
        Log::info('보고서가 생성됐습니다.');
    }
}

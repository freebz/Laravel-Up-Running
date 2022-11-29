// 예제 16-7 잡이 실패할 때 실행할 메서드 정의하기

...
class CrunchReports implements ShouldQueue
{
    ...

    public function failed()
    {
        // 관리자에게 알림을 보내는 등 원하는 모든 작업을 수행한다.
    }
}

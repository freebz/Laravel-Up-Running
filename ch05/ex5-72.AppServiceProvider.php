// 예제 5-72 엘로퀀트 이벤트를 수신하는 코드 등록하기

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $thirdPartyService = new SomeThirdPartyService();

        Contact::creating(function ($contact) use ($thirdPartyService) {
            try {
                $thirdPartyService->addContact($contact);
            } catch (Exception $e) {
                Log::error('ThirdPartyService에 새로운 Contact 추가를 실패함');

                return false; // false를 반환하면 엘로퀀트 모델 생성이 취소된다.
            }
        });
    }
}

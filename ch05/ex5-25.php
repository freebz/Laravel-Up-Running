// 예제 5-25 엘로퀀트 모델을 사용해 다양한 작업을 처리하는 컨트롤러 코드

public function save(Request $request)
{
    // 사용자의 입력으로부터 새로운 연락처 데이터를 생성하고 저장
    $contact = new Contact();
    $contact->first_name = $request->input('first_name');
    $contact->last_name = $request->input('last_name');
    $contact->email = $request->input('email');
    $contact->save();

    return redirect('contacts');
}

public function show($contactId)
{
    // URL 세그먼트를 기반으로 하나의 연락처 정보를 조회하고 JSON으로 변환
    // 만약 ID에 해당하는 데이터가 없으면 예외가 발생한다.
    return Contact::findOrFail($contactId);
}

public function vips()
{
    // 조금 더 복잡한 예제이지만, 기본적인 엘로퀀트를 활용한 기능이다.
    // VIP로 지정된 연락처 목록을 확인하여 "formalName" 속성을 지정한다.
    return Contact::where('vip', true)->get()->map(function ($contact) {
        $contact->formalName = "The exalted ($contact->first_name} of the ($contact->last_name)s";

        return $contact;
    });
}

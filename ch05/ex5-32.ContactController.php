// 예제 5-32 사용자 요청의 입력 값 전체를 사용해 엘로퀀트 데이터를 변경하는 경우

// ContactController
public function update(Contact $contact, Request $request)
{
    $contact->update($request->all());
}

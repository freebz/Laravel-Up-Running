// 예제 5-26 컨트롤러에서 엘로퀀트의 findOrFail() 메서드 사용하기

// ContactController
public function show($contactId)
{
    return view('contacts.show')
        ->with('contact', Contact::findOrFail($contactId));
}

// 예제 9-20 authorize()로 컨트롤러 인가 로직 단순화하기

// 이 코드가
public function edit(Contact $contact)
{
    if (Gate::cannot('update-contact', $contact)) {
        abort(403);
    }

    return view('contacts.edit', ['contact' => $contact]);
}

// 이렇게 된다.
public function edit(Contact $contact)
{
    $this->authorize('update-contact', $contact);

    return view('contacts.edit', ['contact' => $contact]);
}

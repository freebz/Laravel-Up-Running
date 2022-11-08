// 예제 10-9 file() 응답 타입 사용하기

public function invoice($id)
{
    return response()->file("./invoices/{$id}.pdf", ['header' => 'value']);
}

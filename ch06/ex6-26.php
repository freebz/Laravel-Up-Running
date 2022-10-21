// 예제 6-26 세션에 에러가 들어 있는지 확인하기

public function test_missing_email_field_errors()
{
    $this->post('person/create', ['name' => 'Japheth']);
    $this->assertSessionHasErrors(['email']);
}

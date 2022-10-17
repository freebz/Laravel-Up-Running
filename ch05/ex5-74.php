// 예제 5-74 assertDatabaseHas 메서드를 사용해 데이터베이스에 특정 레코드가 존재하는지 확인하기

public function test_contact_creation_works()
{
    $this->post('contacts', [
        'email' => 'jim@bo.com'
    ]);

    $this->assertDatabaseHas('contacts', [
        'email' => 'jim@bo.com'
    ]);
}

// 예제 5-75 접근자, 변경자, 스코프 테스트

public function test_full_name_accessor_works()
{
    $contact = Contact::factory()->make([
        'first_name' => 'Alphonse',
        'last_name' => 'Cumberbund'
    ]);

    $this->assertEquals('Alphonse Cumberbund', $contact->fullName);
}

public function test_vip_scope_filters_out_non_vips()
{
    $vip = Contact::factory()->vip()->create();
    $nonVip = Contact::factory()->create();

    $vips = Contact::vips()->get();

    $this->assertTrue($vips->contains('id', $vip->id));
    $this->assertFalse($vips->contains('id', $nonVip->id));
}

// 예제 12-29 아티즌 응답 코드를 직접 확인하기

$code = $this->artisan('do:thing', ['--flagOfSomeSort' => true]);
$this->assertEquals(0, $code); // 0은 '아무 에러도 없음'을 의미한다

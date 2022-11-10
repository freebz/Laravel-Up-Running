// 예제 11-14 컨테이너의 call() 메서드를 사용해서 클래스 메서드를 직접 호출하기

class Foo
{
    public function bar($parameter1) {}
}

// 첫 번째 파라미터에 'value'라는 값을 전달하면서 'Foo'에 있는 'bar 메서드 호출하기
app()->call('Foo@bar', ['parameter1' => 'value']);

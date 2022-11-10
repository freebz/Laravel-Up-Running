// 예제 11-4 라라벨 오토와이어링

class Bar
{
    public function __construct() {}
}

class Baz
{
    public function __construct() {}
}

class Foo
{
    public function __construct(Bar $bar, Baz $baz) {}
}

$foo = app(Foo::class);

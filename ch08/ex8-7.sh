# 예제 8-7 아티즌 명령어 클래스에서 $this->options() 메서드를 사용하는 방법

# "password:reset {--userId=}"이라고 정의되어 있다고 가정하자.
php artisan password:reset --userId=5

# $this->options() 메서드는 다음의 배열을 반환한다.
[
    "userId" => "5",
    "help" => false,
    "quiet" => false,
    "verbose" => false,
    "ansi" => false,
    "no-ansi" => false,
    "no-interaction" => false,
    "env" => null,
]

# $this->option('userId') 메서드는 다음의 문자열을 반환한다.
"5"

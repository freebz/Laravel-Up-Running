# 예제 8-6 아티즌 명령어 클래스에서 $this->arguments() 메서드를 사용하는 방법

# "password:reset {userId}"이라고 정의되어 있다고 가정하자.
php artisan password:reset 5

# $this->arguments() 메서드는 다음의 배열을 반환한다.
[
    "command": "password:reset",
    "userId": "5",
]

# $this->arguemnt('userId') 메서드는 다음의 문자열을 반환한다.
"5"

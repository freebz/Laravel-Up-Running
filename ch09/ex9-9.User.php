// 예제 9-9 Authenticatable 모델에 MustVerifyEmail 트레이트 추가하기

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    // ...
}

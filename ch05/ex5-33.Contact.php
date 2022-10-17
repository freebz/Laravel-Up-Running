// 예제 5-33 대량 할당 필드를 정의하기 위해서 fillable 또는 Guarded 속성을 정의하는 방법

class Contact
{
    protected $fillable = ['name', 'email'];

    // 또는

    protected $guarded = ['id', 'created_at', 'updated_at', 'owner_id'];
}

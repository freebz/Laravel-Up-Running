// 예제 5-70 하위 모델이 변경될 때 상위 모델 레코드의 타임스템프 값을 갱신하도록 정의하기

class PhoneNumber extends Model
{
    protected $touches = ['contact'];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}

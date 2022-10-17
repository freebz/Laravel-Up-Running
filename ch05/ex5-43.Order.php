// 예제 5-43 엘로퀀트 변경자를 이용해서 속성값 설정하기

// 모델에서의 변경자 정의
class Order extends Model
{
    public function setAmountAttribute($value)
    {
        $this->attributes['amount'] = $value > 0 ? $value : 0;
    }
}

// 정의한 변경자 사용
$order->amount = '15';

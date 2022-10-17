// 예제 5-44 테이블에 존재하지 않는 값을 변경하는 변경자 정의하기

// 모델에서의 변경자 정의
class Order extends Model
{
    public function setWorkgroupNameAttribute($workgroupName)
    {
        $this->attributes['email'] = "{$workgroupName}@ourcompany.com";
    }
}

// 정의한 변경자 사용
$order->workgroup_name = 'jstott';

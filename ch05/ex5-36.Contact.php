// 예제 5-36 모델에 로컬 스코프 정의하기

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function scopeActiveVips($query)
    {
        return $query->where('vip', true)->where('trial', false);
    }
}

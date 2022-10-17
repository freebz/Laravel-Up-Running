// 예제 5-37 인자를 요하는 스코프 메서드를 정의하는 방법

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }
}

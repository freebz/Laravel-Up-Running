// 예제 5-46 JSON 타입을 구현하는 커스텀 형변환 클래스

<?php

namespace App\Models\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class Json implements CastsAttributes
{
    /**
     * 주어진 값 형변환
     *
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @param  string $key
     * @param  mixed $value
     * @param  array $attributes
     * @return array
     */
    public function get($model, $key, $value, $attributes)
    {
        return json_decode($value, true);
    }

    /**
     * 주어진 값을 저장하기 위해 준비
     *
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @param  string $key
     * @param  array $value
     * @param  array $attributes
     * @return string
     */
    public function set($model, $key, $value, $attributes)
    {
        return json_encode($value);
    }
}

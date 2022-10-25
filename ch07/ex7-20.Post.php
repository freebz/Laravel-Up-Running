// 예제 7-20 악의적인 대량 할당으로부터 엘로퀀트 모델을 안전하게 하는 방법

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // author_id 필드는 대량 할당이 불가능하도록 정의한다.
    protected $guarded = ['author_id'];
}

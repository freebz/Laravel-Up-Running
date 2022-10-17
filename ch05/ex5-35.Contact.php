// 예제 5-35 엘러퀀트 모델에 소프트 삭제 기능 활성화하기

<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes; // 트레이트 사용

    protected $dates = ['deleted_at']; // 이 컬럼이 date 포맷이라는 것을 말한다.
}

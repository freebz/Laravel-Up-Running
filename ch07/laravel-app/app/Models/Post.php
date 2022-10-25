<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // author_id 필드는 대량 할당이 불가능하도록 정의한다.
    protected $guarded = ['author_id'];
}

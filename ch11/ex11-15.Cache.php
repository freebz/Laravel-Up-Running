// 예제 11-15 Cache 퍼사드 클래스

<?php

namespace Illuminate\Support\Facades;

class Cache extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cache';
    }
}

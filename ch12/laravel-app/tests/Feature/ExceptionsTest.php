<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExceptionsTest extends TestCase
{
    public function test_exception_in_route()
    {
        // 테스트 코드에서 예외 처리를 비활성화한다.
        $this->withoutExceptionHandling();

        $this->get('/has-exceptions');

        $this->assertTrue(true);
    }
}

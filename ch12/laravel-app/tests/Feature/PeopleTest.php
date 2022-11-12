<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PeopleTest extends TestCase
{
    public function test_all_people_route_should_be_cached()
    {
        $person = Person::factory()->create();

        Cache::shouldReceive('remember')
            ->once()
            ->andReturn(collect[$person]);

        $this->get('people')->assertJsonFragment(['name' => $person->name]);
    }
}

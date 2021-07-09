<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function can_visit_main_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function can_see_vehicles()
    {
        $thread = factory('Vehicles')->create();
        $response = $this->get('/dashboard');

        $response->assertSee($thread->name);
        $response->assertStatus(200);
    }
}

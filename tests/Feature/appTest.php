<?php

namespace Tests\Feature;

use App\Vehicles;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class apptest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_visit_main_page_test()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function test_can_see_vehicles()
    {
        $response = $this->get('/dashboard');
        $response->assertStatus(302);
    }
}

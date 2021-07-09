<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use App\User;

class vehicletest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function testExample()
    {
        parent::setUp();
        $user = User::first();
        Auth::login($user);
        $response = $this->get('/dashboard');
        $response->assertStatus(200);
        $response->assertSee('window.issloggedin = 1');
        $this->assertTrue(true);
    }
}

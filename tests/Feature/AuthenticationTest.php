<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class Authentication extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */



    public function test_example()
    {
        Session::start();
        $response = $this->post('/login', [
            'email' => 'lita2@gmail.com',
            'password' => '12345678',
            '_token' => csrf_token()
        ]);

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertTrue(Str::of($response->getContent())->contains('admin/dashboard'));

    }


}

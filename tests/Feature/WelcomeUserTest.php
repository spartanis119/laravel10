<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeUserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_hello_user_with_nickname(): void
    {
        $this->withoutExceptionHandling();
        $this->get('/saludo/Daniel/canas')
            ->assertStatus(200);
    }

    public function test_hello_user_without_nickname(): void
    {
        $this->withoutExceptionHandling();
        $this->get('/saludo/Daniel')
            ->assertStatus(200);
    }
}

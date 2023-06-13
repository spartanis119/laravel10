<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserModuleTest extends TestCase
{
    /* 
    Para que funcionen los test debe ir:
    1.Palabra teste al inicio de la funcion
    2.Una _ al final de la pabra test e ir separada cada palabra por _ en minuscula
    */

    function test_user_page(): void
    {
        $this->withoutExceptionHandling();
        $this->get('/usuario')
            ->assertStatus(200)
            ->assertSee('Users');
    }

    
}

<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * 
     *
     * @test
     */
    function ingresar_modulo_usuarios()
    {

        $this->get('/usuarios')
             ->assertStatus(200)
             ->assertSee('Usuarios');
    }
}

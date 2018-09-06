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

    function mostrar_texto_modulo_usuarios(){
        $this->get('/usuarios/5')
             ->assertStatus(200)
             ->assertSee('Mostrando detalles del usuario:5');
    }

    function mostrar_usuarios_nuevo(){
        $this->get('/usuarios/nuevo')
             ->assertStatus(200)
             ->assertSee('Crear nuevo usuario');
    }
}

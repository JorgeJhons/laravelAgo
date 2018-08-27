<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * Test Modulo de usuarios
     * @test
     */
    function testBasicTest(){
        $response = $this->get('/usuarios')
             ->assertStatus(200)
             ->assertSee('Usuarios');
    }

    function cargar_detalles_de_usuarios(){
        $response = $this->get('/usuarios/5')
                        ->assertStatus(200)
                        ->assertSee('Mostrando detalles del usuario:5');
    }
    function nuevo_usuario(){
        $response = $this->get('/usuarios/nuevo')
                        ->assertStatus(200)
                        ->assertSee('Crear nuevo usuario...');
    }
}

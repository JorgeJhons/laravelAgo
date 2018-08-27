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
}

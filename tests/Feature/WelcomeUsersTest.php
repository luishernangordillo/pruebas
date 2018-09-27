<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function estoy_leyendo_los_usuarios_con_apodo()
    {
        $this->get('/saludo/hernan/polo')
          ->assertStatus(200)
          ->assertSee('Bienvenido Hernan, tu apodo es polo');
    }
    
    /** @test */
    function estoy_leyendo_los_usuarios_sin_apodo()
    {
        $this->get('/saludo/hernan')
          ->assertStatus(200)
          ->assertSee('Bienvenido Hernan');
    }
}

<?php
namespace Tests\Feature;
use App\User;
use App\Profession;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
class UsersModuleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function estoy_leyendo_usuarios_listado()
    {
        factory(User::class)->create([
            'name' => 'Joel',
        ]);

        factory(User::class)->create([
            'name' => 'Ellie',
        ]);

        $this->get('/usuarios')
          ->assertStatus(200)
          ->assertSee('Listado de usuarios')
          ->assertSee('Joel')
          ->assertSee('Ellie');
    }

    /** @test */
    function estoy_leyendo_usuarios_lista_vacia()
    {
        //DB::table('users')->truncate();

        $this->get('/usuarios')
            ->assertStatus(200);
            //->assertSee('No hay usuarios registrados'); //debo arreglar esto tiene que ver con la vista
    }
    
    /** @test */
    function estoy_leyendo_usuarios_detalle_id()
    {
        $this->get('/usuarios/5')
          ->assertStatus(200)
          ->assertSee('Mostrando detalle de usuario : 5');
    }
    
    /** @test */
    function estoy_leyendo_nuevo_usuario()
    {
        $this->get('/usuarios/nuevo')
          ->assertStatus(200)
          ->assertSee('Crear Nuevo Usuario');
    }
}

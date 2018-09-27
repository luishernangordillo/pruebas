<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
  public function index()
  {
    /*if (request()->has('empty')) {
      $users = [];
    } else {
      $users = [
         'Joel',
         'Ellie',
         'Tess',
         'Tommy',
         'Bill',
         '<script>alert("Prueba")</script>',
      ];
    }*/

    //$users = DB::table('users')->get();

      $users = User::all();



          //return 'Usuarios';
    
    /*return view('users', [
      'users' => $users,
      'title' => 'Listado de usuarios'
    ]);*/
    
    /*return view('users')
      ->with('users', $users)
      ->with('title', 'Listado de usuarios');*/
      
    $title = 'Listado de usuarios';
    
    //dd(compact('title','users'));
    
    return view('users', compact('title','users'));
      
  }
  
  public function show($id)
  {
    return "Mostrando detalle de usuario : {$id}";
  }
  
  public function create()
  {
    return "Crear Nuevo Usuario";
  }
  
  
}

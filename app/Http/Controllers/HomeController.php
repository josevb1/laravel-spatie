<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // auth()->user()->assignRole('user');
        // auth()->user()->givePermissionTo('edit post');  asignar permiso al usuario logueado


        // Role::create(['name' => 'manager']);     crear los nombres de los roles
        // Role::create(['name' => 'client']);
        // Role::create(['name' => 'employee']);

        // Permission::create(['name' => 'create add edit']);   crear los permisos de dichos roles 
        // Permission::create(['name' => 'add edit']);
        // Permission::create(['name' => 'edit']);

        // $role = Role::findById(1);
        // $permission = Permission::findById(1);

        $role->givePermissionTo($permission);



        return view('home');
    }
}

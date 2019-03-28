<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use App\Http\Requests\RoleStoreFormRequest;
use App\Http\Requests\RoleUpdateFormRequest;
use App\Http\Controllers\Controller;
use App\User;

use Session;
class RolesController extends Controller
{

    public function index()
    {
        $roles = Role::all();
        return view('backend.contenidos.roles.index', compact('roles'));
    }
    public function create()
    {
        return view('backend.contenidos.roles.create');
    }
    public function store(RoleStoreFormRequest $request)
    {
        Role::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
        ]);

        return redirect()->route('panel.roles.index')->with('success', 'Rol creado con exito');
    }
    public function edit(Role $role)
    {
        $permisosRol = $role->permissions->pluck('id')->toArray();
        $permisos =  Permission::all();
        return view('backend.contenidos.roles.edit', compact('role','permisos','permisosRol'));
    }
    public function update(RoleUpdateFormRequest $request, Role $role)
    {
        $role->update($request->all());
        $role->permissions()->sync($request->permisos);
        return redirect()->route('panel.roles.index')->with('success' ,'Rol modificado con exito');
    }

}

<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Permission;
use App\Http\Requests\PermisoStoreFormRequest;
use App\Http\Requests\PermisoUpdateFormRequest;
use App\Http\Controllers\Controller;
use App\User;

use Session;
class PermisosController extends Controller
{

    public function index()
    {
        $permisos = Permission::all();
        return view('backend.contenidos.permisos.index', compact('permisos'));
    }
    public function create()
    {
        return view('backend.contenidos.permisos.create');
    }
    public function store(PermisoStoreFormRequest $request)
    {
        Permission::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
        ]);
        return redirect()->route('panel.permisos.index')->with('success', 'Permiso creado con exito');
    }
    public function edit(Permission $permiso)
    {
        return view('backend.contenidos.permisos.edit', compact('permiso'));
    }
    public function update(PermisoUpdateFormRequest $request, $id)
    {
        $role = Permission::findOrFail($id);
        $role->fill($request->all());
        $role->save();
        if($role->save()){
            return redirect()->route('panel.permisos.index')->with('success' ,'Permiso modificado con exito');
        }
    }

}

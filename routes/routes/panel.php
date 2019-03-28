<?php

Route::prefix('panel')->group(function () {

    Route::resource('users', 'backend\UsersController', [
        'names'=> [
        'index' => 'panel.users.index',
        'edit' => 'panel.users.edit',
        'create' => 'panel.users.create',
        'store' => 'panel.users.store',
        'update' => 'panel.users.update',
        'destroy' => 'panel.users.destroy'
        ]
    ])->middleware('auth');

    Route::resource('roles', 'backend\RolesController', [
        'names'=> [
        'index' => 'panel.roles.index',
        'edit' => 'panel.roles.edit',
        'create' => 'panel.roles.create',
        'store' => 'panel.roles.store',
        'update' => 'panel.roles.update',
        'destroy' => 'panel.roles.destroy'
        ]
    ])->middleware('auth');

    Route::resource('permisos', 'backend\PermisosController', [
        'names'=> [
        'index' => 'panel.permisos.index',
        'edit' => 'panel.permisos.edit',
        'create' => 'panel.permisos.create',
        'store' => 'panel.permisos.store',
        'update' => 'panel.permisos.update',
        'destroy' => 'panel.permisos.destroy'
        ]
    ])->middleware('auth');
});

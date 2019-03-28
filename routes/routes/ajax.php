<?php

/**
 *
 * routes para responder solicitudes ajax
 *
 */

Route::post('ajax/users/delete', 'backend\ajax\UsersController@delete')->name('ajax.users.delete');
Route::post('ajax/roles/delete', 'backend\ajax\RolesController@delete')->name('ajax.roles.delete');
Route::post('ajax/permisos/delete', 'backend\ajax\PermisosController@delete')->name('ajax.permisos.delete');

<?php

namespace App\Http\Controllers\backend\ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;
use DB;

class UsersController extends Controller
{
    public function delete(Request $request)
    {
        if($request->id && $request->ajax()){
            try {
                $ids = [];
                foreach($request->id as $usuario){
                    array_push($ids , intval($usuario));
                }
                try {
                    DB::table('users')->whereIn('id', $ids)->delete();
                    DB::commit();
                    return response()->json("to bom, jorge eliminado con exito");
                    // tudo bom
                } catch (\Exception $e) {
                    DB::rollback();
                    return response()->json("to mal loco no se elimino corretamente nada");
                    // quebrou
                }
            } catch (\Illuminate\Database\QueryException $e) {
                return response()->json("error de integridad");
            }
        }else{
            return response()->json("si no me mandas nada que queres que elimine");
        }
    }




}

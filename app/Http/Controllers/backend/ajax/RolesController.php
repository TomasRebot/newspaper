<?php

namespace App\Http\Controllers\backend\ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Caffeinated\Shinobi\Models\Role;
use Session;
use DB;

class RolesController extends Controller
{
    public function delete(Request $request)
    {
        if($request->id && $request->ajax()){
            try {
                $ids = [];
                foreach($request->id as $rol){
                    array_push($ids , intval($rol));
                }
                try {
                    DB::table('roles')->whereIn('id', $ids)->delete();
                    DB::commit();
                    return response()->json("rol eliminado con exito");
                    // tudo bom
                } catch (\Exception $e) {
                    DB::rollback();
                    return response()->json("error al eliminar");
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

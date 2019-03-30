<?php

namespace App;

class Show
{
    public function menu()
    {
        $dir = resource_path().'/views/backend/menu/secciones/administracion';
        $includepath =  "backend.menu.secciones.administracion.";
        $includes = [];
        $directorio = opendir($dir);
        $archivos = [];
        while ($archivo = readdir($directorio))
        {
            if (!is_dir($archivo))
            {
                $ruta =  str_replace(".blade.php", "", $archivo);
                array_push( $includes ,$ruta );
            }
        }
        closedir($directorio);
        asort($includes, SORT_NUMERIC);
        for($i = 0 ; $i < count($includes); $i++)$includes[$i] = $includepath.$includes[$i];
        return $includes;

    }
}

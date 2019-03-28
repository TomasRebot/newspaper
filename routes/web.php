<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$routesDir = dirname(__FILE__)."/routes";
if(is_dir($routesDir)){
    $dir=dir($routesDir);
    while($entry=$dir->read()){
        if(substr($entry,0,1)===".")continue;
        include($routesDir."/".$entry);
    }
}




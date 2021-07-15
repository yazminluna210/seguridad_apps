<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
        public function rutaYAZ(){
                return json_encode(tablaYAZ::all());
        }

        public function add(Request $R){
                $yazmin = new tablaYAZ();
                $yazmin->nombre = $R->nombre;
                $yazmin->apellido = $R->apellido;
                $yazmin->id = $R->id;
                $yazmin->origen = $_SERVER["SERVER_ADDR"];
                $yazmin->save();

                return tablaYAZ::all();
        }
}

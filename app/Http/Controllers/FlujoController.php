<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlujoController extends Controller
{
    public function IngresoDeDinero(Request $data)
    {
        DB::table('ingreso_de_dinero')->insert([
            'ingreso' => $data['Monto'],
            'tipo' => $data['Tipo'],
            'fecha' => $data['Fecha'],
        ]);
    }       
    
    public function EgresoDeDinero(Request $data)
    {
        DB::table('egreso_de_dinero')->insert([
            'egreso' => $data['Monto'],
            'tipo' => $data['Tipo'],
            'fecha' => $data['Fecha'],
        ]);
    }
}

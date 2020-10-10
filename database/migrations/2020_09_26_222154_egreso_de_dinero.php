<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EgresoDeDinero extends Migration
{
    public function up()
    {   Schema::create('egreso_de_dinero',function (Blueprint $table) {
        $table->increments("id")->start_from(0);
        $table->string("tipo");
        $table->string("egreso");
        $table->string("fecha");
    });
        
    }

    public function down()
    {
        Schema::dropIfExists('egreso_de_dinero');
    }
}

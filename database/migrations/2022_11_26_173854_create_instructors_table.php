<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructor', function (Blueprint $table) {
            $table->integer('codigo')->primary();
            $table->string('nombre', 105);
            $table->string('apellido', 105);
            $table->string('correo', 45);   
            $table->string('telefono', 12);   //como es que era para ponerle el limite
            $table->string('direccion', 100);   
            $table->string('observaciones', 45);   

            $table->foreignId('codigo_curso')->constrained('curso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instructor');
    }
}

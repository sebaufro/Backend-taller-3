<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titular');
            $table->string('entrada');
            $table->text('cuerpo');
            $table->string('imagen');
            $table->unsignedInteger('categoria_id'); 
            $table->foreign('categoria_id')->references('categoria_id')->on('categoria');
            $table->unsignedInteger('usuario_id'); 
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticia');
    }
}

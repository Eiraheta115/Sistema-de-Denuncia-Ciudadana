<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('verified')->default(false);
            $table->rememberToken();

            $table->integer('id_persona')->unsigned();
            $table->foreign('id_persona')->references('id_persona')->on('personas');

            $table->integer('id_rol')->unsigned()->default(1);
            $table->foreign('id_rol')->references('id_rol')->on('roles');

            $table->integer('id_entidad')->unsigned()->nullable();
            $table->foreign('id_entidad')->references('id_entidad')->on('entidades');

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
        Schema::dropIfExists('users');
    }
}

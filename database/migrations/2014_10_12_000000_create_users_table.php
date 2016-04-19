<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('cpf')->unique();
            $table->string('phone')->unique();
            $table->string('address', 150);
            $table->enum('role', array('Admin', 'Coordenador', 'Técnico', 'Estagiário'))->default('Estagiário');/* 0 - Admin; 1 - Coordenador; 2 - Técnico; 3 - Estagiário; */
            $table->enum('area', array('Master', 'Gerência', 'Diagramação', 'Ilustração', 'Vídeo', 'Web'));/* 0 - Master; 1 - Digramação, 2 - Gerencia; 3 - Ilustração; 4 - Vídeo; 5 - Web; */
            $table->date('entrance_date');
            $table->string('password', 60);
            $table->boolean('active')->default(true);
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}

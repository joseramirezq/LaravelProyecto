<?php

use Illuminate\Support\Facades\Schema;
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

            $table->unsignedInteger('profession_id');
            $table->foreign('profession_id')->references('id')->on('professions');

            $table->string('name');
            $table->string('email')->unique();// no puede haber dos correo iguales
            $table->timestamp('email_verified_at')->nullable('professions');
            $table->string('password');
           //100 caracteres y spuede ser null
            $table->rememberToken();
            $table->timestamps();//marcas de tiempo
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

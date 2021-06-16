<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->bigInteger('dni')->nullable();
            $table->string('inicial')->nullable();
            $table->integer('estado')->nullable();
            $table->string('cargo')->nullable();
            $table->integer('depe_id')->nullable();
            $table->string('vigencia')->nullable();
            $table->string('observacion')->nullable();
            $table->string('tipo')->nullable();
            $table->string('caseta')->nullable();
            $table->string('esjefe')->nullable();
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->string('especialidad')->nullable();
            $table->string('navbar')->nullable();
            $table->string('darkmode')->nullable();
            $table->string('push_id')->nullable();
            $table->text('avatar')->default('avatar/logo.png');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('username');
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}

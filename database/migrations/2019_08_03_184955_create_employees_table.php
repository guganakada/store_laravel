<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->string('email',100)->nullable();
            $table->date('birth_date')->nullable();
            $table->enum('gender', ['M', 'F'])->nullable();
            $table->string('address')->nullable();
            $table->string('number')->nullable();
            $table->string('complement')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('phone')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->string('cnh')->nullable();
            $table->string('scholarity')->nullable();
            $table->string('profession')->nullable();
            $table->string('description')->nullable();
            $table->float('salary',8,2)->nullable();
            $table->integer('level')->default('1')->nullable();
            $table->string('photo')->default('default.png')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('responsibility_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('employees', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('responsibility_id')->references('id')->on('responsibilities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}

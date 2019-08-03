<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->date('date');
            $table->string('payment')->nullable();
            $table->float('subtotal',8,2)->nullable();
            $table->float('discount',8,2)->nullable();
            $table->float('total',8,2)->nullable();
            $table->string('observation')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });

        Schema::table('budgets', function($table) {
            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budgets');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('cand1')->default('');
            $table->string('cand2')->default('');
            $table->string('cand3')->default('');
            $table->string('cand4')->default('');


            $table->integer('cand1vote');
            $table->integer('cand2vote');
            $table->integer('cand3vote');
            $table->integer('cand4vote');


            $table->integer('area_id');
            $table->integer('year');
            $table->string('more_info')->default('');
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
        Schema::dropIfExists('results');
    }
}

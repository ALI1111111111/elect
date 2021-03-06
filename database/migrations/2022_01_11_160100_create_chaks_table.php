<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chaks', function (Blueprint $table) {
            $table->id();
            $table->string('area_name')->default('');
            $table->string('totalvote')->default('');
            $table->string('totpop')->default('');
            $table->string('UC')->default('');
            $table->string('more_info')->default('');

            // $table->integer('canid');
            // $table->integer('voteget');
            // $table->integer('result');

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
        Schema::dropIfExists('chaks');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WritingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writing', function(BluePrint $table) {
            $table->bigIncrements('id');
            $table->string('question');
            $table->string('ideas');
            $table->string('answer');
            $table->string('response');
            $table->mediumText('marks');
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('writing');
    }
}

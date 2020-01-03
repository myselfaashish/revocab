<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('words', function(BluePrint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('synonyms');
            $table->string('mnemonics');
            $table->string('nepali_meaning');
            $table->mediumText('sentences');
            $table->string('root_word');
            $table->mediumText('extras');
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
        Schema::dropIfExists('words');
    }
}

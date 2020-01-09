<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('words', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->mediumText('meaning')->nullable();
            $table->string('synonyms')->nullable();
            $table->string('mnemonics')->nullable();
            $table->string('nepali_meaning')->nullable();
            $table->mediumText('sentences')->nullable();
            $table->mediumText('root_word')->nullable();
            $table->mediumText('extras')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('writing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('question');
            $table->mediumText('ideas')->nullable();
            $table->mediumText('answer');
            $table->float('marks')->nullable();
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('writing');
        Schema::dropIfExists('words');
    }
}

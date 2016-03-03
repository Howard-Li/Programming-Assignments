<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->longtext('content');
            $table->string('hint')->nullable();
            $table->enum('category', array('algo', 'sys'));
            $table->enum('easiness', array('easy', 'medium', 'hard'));
            $table->text('testcases');
            $table->binary('attachment')->nullable();
            $table->bigInteger('sumofruns')->nullable();
            $table->bigInteger('sumofruntimes')->nullable();
            $table->bigInteger('sumofsquareruntimes')->nullable();
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
        Schema::drop('problems');
    }
}


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('description');
            $table->smallInteger('day_id')->unsigned();
            $table->foreign('day_id')->references('id')->on('days');
            $table->smallInteger('classification_id')->unsigned();
            $table->foreign('classification_id')->references('id')->on('classifications');
            $table->smallInteger('tag_id')->unsigned();
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->boolean('status');
            $table->string('obs');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}

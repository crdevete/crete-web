<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question_1');
            $table->string('question_2');
            $table->string('question_3');
            $table->string('question_4');
            $table->string('question_5A')->nullable()->default(null);
            $table->string('question_5B')->nullable()->default(null);
            $table->string('question_5D')->nullable()->default(null);
            $table->string('question_5C')->nullable()->default(null);
            $table->string('question_5E')->nullable()->default(null);
            $table->string('question_5F')->nullable()->default(null);
            $table->string('question_6');
            $table->string('question_7');
            $table->string('question_8');
            $table->string('question_9');
            $table->text('comment')->nullable()->default(null);
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
        Schema::dropIfExists('surveys');
    }
}

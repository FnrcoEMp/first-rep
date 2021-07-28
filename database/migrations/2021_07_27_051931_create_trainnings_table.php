<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('trainnings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('description_ar')->nullable();
            $table->text('objective_en')->nullable();
            $table->text('attend_en')->nullable();
            $table->text('benefits_en')->nullable();
            $table->text('meeting_en')->nullable();
            $table->text('benefits_implement')->nullable();
            $table->bigInteger('trainer_id')->nullable();
            $table->text('level_en')->nullable();
            $table->text('lesson_en')->nullable();
            $table->text('enrolled_en')->nullable();
            $table->text('language_en')->nullable();
            $table->text('material_en')->nullable();
            $table->text('title_en')->nullable();
            $table->text('iso')->nullable();
            $table->text('image')->nullable();

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
        Schema::dropIfExists('trainnings');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->text('our_mission_en');
            $table->text('our_mission_ar');

            $table->text('our_vision_en');
            $table->text('our_vision_ar');

            $table->text('message_en');
            $table->text('message_ar');

            $table->text('about_ar');
            $table->text('about_en');
            $table->text('our_quality_objective_ar');
            $table->text('our_quality_objective_en');

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
        Schema::dropIfExists('settings');
    }
}

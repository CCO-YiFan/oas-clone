<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgrammePickedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programme_picked', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_records_id')->constrained('application_records')->cascadeOnUpdate();
            $table->foreignId('programme_records_id')->constrained('programme_records')->cascadeOnUpdate();
            $table->foreignId('choice_priorities_id')->constrained('choice_priorities')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programme_picked');
    }
}

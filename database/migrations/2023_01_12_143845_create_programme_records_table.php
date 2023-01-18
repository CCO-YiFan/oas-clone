<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgrammeRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programme_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('semester_year_mappings_id')->constrained('semester_year_mappings')->cascadeOnUpdate();
            $table->foreignId('programmes_id')->constrained('programmes')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programme_records');
    }
}

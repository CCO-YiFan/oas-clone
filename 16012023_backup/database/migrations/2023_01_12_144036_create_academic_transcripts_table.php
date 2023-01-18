<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicTranscriptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_transcripts', function (Blueprint $table) {
            $table->foreignId('academic_records_id')->constrained('academic_records')->cascadeOnUpdate();
            $table->foreignId('school_transcript_id')->constrained('school_transcripts')->cascadeOnUpdate();
            $table->foreignId('school_levels_id')->constrained('school_levels')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academic_transcripts');
    }
}

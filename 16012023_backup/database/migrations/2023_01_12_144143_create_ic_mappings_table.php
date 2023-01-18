<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIcMappingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ic_mappings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supporting_documents_id')->constrained('supporting_documents')->cascadeOnUpdate();
            $table->foreignId('user_details_id')->constrained('user_details')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ic_mappings');
    }
}

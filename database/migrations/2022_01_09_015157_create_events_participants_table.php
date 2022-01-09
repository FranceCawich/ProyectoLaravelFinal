<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_participants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('events_id')->constrained();
            $table->foreignId('participants_id')->constrained();
            $table->foreignId('participants_types_id')->constrained();
            $table->foreignId('documents_types_id')->constrained();
            $table->foreignId('documents_id')->constrained();
            $table->foreignId('institutions_id')->constrained();         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events_participants');
    }
}
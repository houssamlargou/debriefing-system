<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('debriefing_evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('debriefing_id')->constrained('debriefings')->cascadeOnDelete();
            $table->foreignId('competence_id')->constrained('competences')->cascadeOnDelete();

            $table->string('mastery_level'); // will store Enum value
            $table->text('comment')->nullable();

            $table->timestamps();

            $table->unique(['debriefing_id', 'competence_id']);
        });
    }
    public function down(): void {
        Schema::dropIfExists('debriefing_evaluations');
    }
};

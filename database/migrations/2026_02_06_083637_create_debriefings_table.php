<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('debriefings', function (Blueprint $table) {
            $table->id();

            $table->foreignId('brief_id')->constrained('briefs')->cascadeOnDelete();

            $table->foreignId('teacher_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('student_id')->constrained('users')->cascadeOnDelete();

            $table->text('comment')->nullable(); // commentaire pédagogique général
            $table->timestamp('debriefed_at')->useCurrent();
            $table->timestamps();

            // optional: prevent duplicates same day
            // $table->unique(['brief_id', 'student_id', 'debriefed_at']);
        });
    }
    public function down(): void {
        Schema::dropIfExists('debriefings');
    }
};

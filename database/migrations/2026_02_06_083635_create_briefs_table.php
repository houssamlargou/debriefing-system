<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('briefs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sprint_id')->constrained('sprints')->cascadeOnDelete();
            $table->string('title');
            $table->text('description')->nullable();
            $table->unsignedSmallInteger('estimated_hours')->nullable();
            $table->enum('type', ['individual', 'collective'])->default('individual');
            $table->unsignedInteger('order')->default(1);
            $table->timestamps();

            $table->unique(['sprint_id', 'order']);
        });
    }
    public function down(): void {
        Schema::dropIfExists('briefs');
    }
};

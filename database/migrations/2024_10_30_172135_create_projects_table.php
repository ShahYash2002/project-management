<?php

use App\Enums\ProjectStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->foreignId("group_id")->constrained("groups")->cascadeOnDelete();
            $table->foreignId("project_definition_id")->constrained("project_definitions")->cascadeOnDelete();
            $table->foreignId("academic_term_id")->constrained("academic_terms")->cascadeOnDelete();
            $table->enum("status", ProjectStatus::cases())->default(ProjectStatus::IN_PROGRESS());

            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            
            $table->text('additional_notes')->nullable();
            $table->json('metadata')->nullable();

            $table->timestamps();
            $table->index(['status', 'academic_term_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

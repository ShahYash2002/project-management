<?php

use App\Enums\Semester;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('academic_terms', function (Blueprint $table) {
            $table->id();

            $table->year("year");
            $table->enum("semester", Semester::cases());

            $table->unique(["year", "semester"]);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_terms');
    }
};

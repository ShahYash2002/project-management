<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('faculties', function (Blueprint $table) {
            $table->foreign("department_id", "faculty_department_foreign_key")->on("departments")->references("id")->nullOnDelete();
            $table->foreign("created_by", "faculty_created_by_foreign_key")->on("users")->references("id")->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('faculties', function (Blueprint $table) {
            $table->dropForeign("faculty_department_foreign_key");
            $table->dropForeign("faculty_created_by_foreign_key");
        });
    }
};

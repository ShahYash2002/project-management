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
        Schema::table('students', function (Blueprint $table) {
            $table->foreign("department_id", "student_department_foreign_key")->on("departments")->references("id")->nullOnDelete();
            $table->foreign("created_by", "student_created_by_foreign_key")->on("users")->references("id")->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign("student_department_foreign_key");
            $table->dropForeign("student_created_by_foreign_key");
        });
    }
};

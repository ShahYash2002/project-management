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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId("department_id")->nullable()->after("password");
            $table->boolean("active")->default(true)->after("department_id");

            $table->foreign("department_id", "user_department_foreign_key")->on("departments")->references("id")->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign("user_department_foreign_key");

            $table->dropColumn("department_id");
            $table->dropColumn("active");
        });
    }
};

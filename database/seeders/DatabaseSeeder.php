<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // seed default roles
        $roles = config("seeder.roles");

        foreach ($roles as $role) {
            Role::findOrCreate($role);
        }

        // creates an admin user.
        try {
            User::factory()->admin()->create();
        } catch (\Throwable $th) {
            logs()->info("Admin user already exists...");
        }

        // seed default departments
        $departments = config("seeder.departments");

        foreach ($departments as $department) {
            Department::createOrFirst(["name" => $department], ["name" => $department]);
        }
    }
}

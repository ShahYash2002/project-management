<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "thumbnail_url",
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function faculties()
    {
        return $this->hasMany(Faculty::class);
    }

    public function members()
    {
        return $this->hasMany(User::class);
    }

    public function coordinator()
    {
        return $this->hasOne(User::class)->where("users.active",1)->role(config("seeder.roles")["project_coordinator"]);
    }
}

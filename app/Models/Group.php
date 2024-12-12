<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ["name"];

    public function students()
    {
        return $this->belongsToMany(Student::class, "group_students");
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function projectDefinitions()
    {
        return $this->hasMany(ProjectDefinition::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    protected $fillable = ["title"];

    public function faculties()
    {
        return $this->belongsToMany(Faculty::class, 'faculty_domains');
    }

    public function projectDefinitions()
    {
        return $this->belongsToMany(ProjectDefinition::class, 'project_definition_domains');
    }
}

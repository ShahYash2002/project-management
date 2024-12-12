<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "group_id",
        "project_definition_id",
        "academic_term_id",
    ];

    public function faculties()
    {
        return $this->belongsToMany(Faculty::class, "project_faculties");
    }

    public function academicTerm()
    {
        return $this->belongsTo(AcademicTerm::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function projectDefinition()
    {
        return $this->belongsTo(ProjectDefinition::class);
    }
}

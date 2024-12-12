<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDefinition extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "group_id",
    ];

    public function domains()
    {
        return $this->belongsToMany(Domain::class, "project_definition_domains");
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function project()
    {
        return $this->hasOne(Project::class);
    }
}

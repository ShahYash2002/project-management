<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "first_name",
        "last_name",
        "email",
        "phone_number",
        "department_id",
        "created_by",
    ];

    public function domains()
    {
        return $this->belongsToMany(Domain::class, 'faculty_domains');
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}

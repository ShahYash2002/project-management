<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
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

    public function groups()
    {
        return $this->belongsToMany(Student::class, "group_students");
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}

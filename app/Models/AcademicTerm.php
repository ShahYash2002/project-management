<?php

namespace App\Models;

use App\Enums\Semester;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicTerm extends Model
{
    use HasFactory;

    protected $fillable = [
        "year",
        "semester"
    ];

    protected $casts = [
        "semester" => Semester::class
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}

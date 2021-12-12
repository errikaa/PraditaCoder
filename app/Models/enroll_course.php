<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enroll_course extends Model
{
    use HasFactory;
    public $table = "enroll_course";
    protected $fillable = [
        'id_enroll',
        'id_courses',
        'course_name',
        'id',
    ];
}

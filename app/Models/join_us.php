<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class join_us extends Model
{
    use HasFactory;
    public $table = "join_us";
    protected $fillable = [
        'fullname',
        'birthdate',
        'gender',
        'nim',
        'email',
        'occupation',
        'message',
    ];
}

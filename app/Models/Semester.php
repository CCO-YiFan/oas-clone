<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;

    protected $connection = "mysql";
    
    /**
     * timestamps false
     */
    public $timestamps = false;
    
    protected $fillable = [
        'semesters',
    ];
}

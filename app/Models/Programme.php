<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;

    protected $connection = "mysql";

    public $timestamps = false;

    protected $fillable = [
        'EnglishName',
        'programme_levels_id',
        'programme_types_id',
        'status',
    ];
}

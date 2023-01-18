<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgrammeRecord extends Model
{
    use HasFactory;
    protected $connection = "mysql";
    public $timestamps=false;


    protected $fillable = [
        'semester_year_mappings_id',
        'programmes_id',
        
    ];

    public function semesterYearMapping(){
        return $this->belongsTo(SemesterYearMapping::class);
    }

    public function programmeRecord(){
        return $this->hasOne(ProgrammeRecord::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicTranscript extends Model
{
    use HasFactory;
    public $table='academic_transcripts';
    protected $connection='mysql';
    public $timestamps = false;

    protected $fillable = [
        'academic_records_id',
        'school_transcript_id',
        'school_levels_id',
    ];

    public function academicTranscript(){
        return $this->hasOne(academicTranscript::class);
    }

    public function schoolLevel(){
        return $this->belongsTo(schoolLevel::class);
    }
}

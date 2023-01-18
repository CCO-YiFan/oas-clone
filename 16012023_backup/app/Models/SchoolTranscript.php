<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolTranscript extends Model
{
    use HasFactory;
    protected $connection='mysql';

    protected $fillable = [
        'transcript',
        'leaving_cert',
        
    ];

    public function academicTranscript(){
        return $this->belongsTo(academicTranscript::class);
    }

}

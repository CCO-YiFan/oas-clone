<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgrammePicked extends Model
{

    public $table='programme_picked';
    use HasFactory;
    protected $connection = "mysql";
    public $timestamps = false;

    protected $fillable = [
        'application_records_id',
        'programme_records_id',
        'choice_priorities_id',
    ];


    public function programmeRecord(){
        return $this->belongsTo(ProgrammeRecord::class);
    }
}

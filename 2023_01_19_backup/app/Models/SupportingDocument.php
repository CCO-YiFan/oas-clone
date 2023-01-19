<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportingDocument extends Model
{
    use HasFactory;
    protected $connection = "mysql";
    /**
     * timestamps false
     */
    public $timestamps = false;


    protected $fillable = [
        'ic_front',
        'ic_back',
    ];

    public function icMapping(){
        return $this->hasOne(IcMapping::class);
    }
}

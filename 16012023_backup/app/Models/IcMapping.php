<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IcMapping extends Model
{
    use HasFactory;
    protected $connection = "mysql";
    /**
     * timestamps false
     */
    public $timestamps = false;


    protected $fillable = [
        'supporting_documents_id',
        'user_details_id',
    ];

    public function icMapping(){
        return $this->belongsTo(IcMapping::class);
    }

    public function userDetail(){
        return $this->hasOne(UserDetail::class);
    }
}

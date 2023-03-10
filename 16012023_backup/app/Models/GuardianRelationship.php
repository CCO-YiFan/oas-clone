<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuardianRelationship extends Model
{
    use HasFactory;
    protected $connection = "mysql";

    /**
     * timestamps false
     */
    public $timestamps = false;

    /**
     *  The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'relationship_code',
        'status',
    ];
    public function guardianDetail()
    {
        return $this->hasOne(GuardianDetail::class);
    }
    public function emergencyContact()
    {
        return $this->hasOne(emergencyContact::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantOffice extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $with = [
        'province',
        'city'
    ];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
    
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function infoConsultant()
    {
        return $this->belongsTo(infoConsultant::class);
    }
}

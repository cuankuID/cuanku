<?php

namespace App\Models;

use App\Models\InfoConsultant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ScheduleConsultation extends Model
{
    use HasFactory;

    protected $table = 'schedule_consultations';
    
    protected $guarded = [
        'id'
    ];

    public function infoConsultant()
    {
        return $this->belongsTo(InfoConsultant::class, 'consultant_id');
    }
}

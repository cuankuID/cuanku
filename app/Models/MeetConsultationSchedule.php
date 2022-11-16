<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetConsultationSchedule extends Model
{
    use HasFactory;

    protected $table = 'meet_consultation_schedules';
    
    protected $guarded = [
        'id'
    ];

    public function infoConsultant()
    {
        return $this->belongsTo(InfoConsultant::class, 'consultant_id');
    }
}

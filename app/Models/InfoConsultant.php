<?php

namespace App\Models;

use App\Models\User;
use App\Models\ConsultantOffice;
use App\Models\ScheduleConsultation;
use Illuminate\Database\Eloquent\Model;
use App\Models\LiveConsultationSchedule;
use App\Models\MeetConsultationSchedule;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InfoConsultant extends Model
{
    use HasFactory;
    
    protected $guarded = [
        'id'
    ];

    protected $with = [
        'user',
        'consultantOffice',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'consultant_id');
    }

    public function consultantOffice()
    {
        return $this->belongsTo(ConsultantOffice::class, 'office_id');
    }

    public function scheduleConsultation()
    {
        return $this->hasMany(ScheduleConsultation::class, 'consultant_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ConsultantOffice;
use App\Models\LiveConsultationSchedule;
use App\Models\MeetConsultationSchedule;

class InfoConsultant extends Model
{
    use HasFactory;
    
    protected $guarded = [
        'id'
    ];

    protected $with = [
        'user',
        'consultantOffice',
        'liveConsultationSchedule'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'consultant_id');
    }

    public function consultantOffice()
    {
        return $this->belongsTo(ConsultantOffice::class, 'office_id');
    }

    public function meetConsultationSchedule()
    {
        return $this->hasMany(MeetConsultationSchedule::class, 'consultant_id', 'consultant_id');
    }

    public function liveConsultationSchedule()
    {
        return $this->hasMany(LiveConsultationSchedule::class, 'consultant_id', 'consultant_id');
    }
}

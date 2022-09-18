<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderLiveConsultation extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $with = [
        'user'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function consultant()
    {
        return $this->belongsTo(User::class, 'consultant_id');
    }
}

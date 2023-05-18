<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MethodConsultation extends Model
{
    use HasFactory;

    protected $table = 'method_consultations';
    
    protected $guarded = [
        'id'
    ];
}

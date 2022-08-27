<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusConsultation extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function orderConsultation()
    {
        return $this->hasMany(OrderConsultation::class);
    }
}

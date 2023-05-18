<?php

namespace App\Models;

use App\Models\User;
use App\Models\MethodConsultation;
use App\Models\StatusConsultation;
use App\Models\CategoryConsultation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderConsultation extends Model
{
    use HasFactory;

    protected $table = 'order_consultations';

    protected $guarded = [
        'id'
    ];

    // protected $with = [
    //     'user',
    //     'consultant',
    //     'statusConsultation',
    //     'categoryConsultation'
    // ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function consultant()
    {
        return $this->belongsTo(User::class, 'consultant_id');
    }

    public function statusConsultation()
    {
        return $this->belongsTo(StatusConsultation::class, 'status_id');
    }

    public function categoryConsultation()
    {
        return $this->belongsTo(CategoryConsultation::class, 'category_id');
    }

    public function methodConsultation()
    {
        return $this->belongsTo(MethodConsultation::class, 'method_id');
    }
}

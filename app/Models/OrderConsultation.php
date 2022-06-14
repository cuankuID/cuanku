<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderConsultation extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $with = [
        'user',
        'consultant',
        'statusConsultation',
        'categoryConsultation'
    ];

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

    public function scopeFilter($query, array $filters)
    {
        // dd($filters['search']);
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('schedule', 'like', '%' . $search . '%')
                        ->orWhereHas('user', function($query) {
                            return $query->where('name', 'like', '%' . request()->get('search') . '%');
                        })
                        ->orWhereHas('categoryConsultation', function($query) {
                            return $query->where('name', 'like', '%' . request()->get('search') . '%');
                        });
        });
    }
}

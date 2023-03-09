<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SubscriptionOrder extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['status'] ?? false, function($query, $status) {
            return $query->where('status', $status);
        });
    }
}

<?php

namespace App\Models;

use App\Models\Article;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements MustVerifyEmail, CanResetPassword, JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [
        'id'
    ];

    protected $with = [
        'role'
    ];

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function orderConsultation()
    {
        return $this->hasMany(OrderConsultation::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function meetConsultationOrder()
    {
        return $this->hasMany(MeetConsultationOrder::class, 'consultant_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function forumThread()
    {
        return $this->hasMany(ForumThread::class);
    }

    public function infoConsultant()
    {
        return $this->hasOne(InfoConsultant::class, 'consultant_id');
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeFilter($query, array $filters)
    {
        // dd($filters['search']);
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%')
                        ->orWhere('username', 'like', '%' . $search . '%')
                        ->orWhereHas('role', function($query) {
                            return $query->where('name', 'like', '%' . request()->get('search') . '%');
                        });
        });
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}

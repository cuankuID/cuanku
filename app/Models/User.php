<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
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

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function scopeFilter($query, array $filters)
    // {
        // $query->when($filters['search'] ?? false, function($query, $search) {
            // return $query->where('name', 'like', '%' . $search . '%')
                        // ->orWhere('username', 'like', '%' . $search . '%');
        // });
    // }

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
}

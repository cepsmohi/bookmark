<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'pic'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function cards()
    {
        return $this->hasMany(Card::class);
    }

    public function getImageAttribute()
    {
        $defaultImage = asset('images/public/avatars/avatar.png');
        $imageExists = false;
        if ($this->userdetail != null) {
            $imageExists = $this->userdetail->pic != null && Storage::disk('public')
                    ->exists($this->userdetail->pic);
        }
        return $imageExists ? asset('images/public/' . $this->userdetail->pic) : $defaultImage;
    }

}

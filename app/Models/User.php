<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'phone', 'avatar', 'student_id'
    ];

    public function personalDetail()
    {
        return $this->hasOne(PersonalDetail::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function achievements()
    {
        return $this->hasMany(Achievement::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function info()
    {
        return $this->hasOne(Info::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
	use HasFactory;


    protected $fillable = [
        'name',
        'description',
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function vendors()
    {
        return $this->belongsToMany(User::class, 'vendor_specialties');
    }
}

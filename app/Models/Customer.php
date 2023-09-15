<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    	protected $fillable = [
        'user_id',
        'phone',
        'email',
        'additional_info',
        'job_description',
        'zip_code',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function media()
    {
        return $this->morphMany(Media::class, 'owner');
    }

}

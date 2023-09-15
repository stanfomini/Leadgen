<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

	 protected $fillable = [
        'user_id',
        'business_name',
        'website',
        'contact_email',
        'contact_phone',
        'service_zip_codes',
        'specialties',
    ];

    protected $casts = [
        'service_zip_codes' => 'array',
        'specialties' => 'array',
    ];

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship with Job
    public function jobs()
    {
        return $this->belongsToMany(Job::class);
    }

    // Relationship with Specialty
    public function specialties()
    {
        return $this->belongsToMany(Specialty::class);
    }

    // Relationship with Quote
    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }

    // Relationship with Message
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    // Relationship with Review
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

}

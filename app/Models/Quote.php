<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'vendor_id',
        'customer_id',
        'description',
        'items',
        'total_price',
        'status',
    ];

    protected $casts = [
        'items' => 'array',
    ];

    // Relationship with Job
    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    // Relationship with Vendor
    public function vendor()
    {
        return $this->belongsTo(User::class, 'vendor_id');
    }

    // Relationship with Customer
    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }
}

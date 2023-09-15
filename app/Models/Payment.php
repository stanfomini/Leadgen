<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
	
    protected $fillable = [
        'vendor_id',
        'lead_count',
        'lead_value',
        'total_amount',
        'week_start_date',
        'week_end_date',
        'payment_date',
        'is_paid',
    ];

    // Relationship with Vendor (User)
    public function vendor()
    {
        return $this->belongsTo(User::class, 'vendor_id');
    }

}

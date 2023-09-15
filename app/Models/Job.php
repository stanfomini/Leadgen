<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
	use HasFactory;

	protected $fillable = [
        'customer_id',
        'vendor_id',
        'specialty_id',
        'description',
        'image_path',
        'address',
        'requested_start_date',
    ];

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function vendor()
    {
        return $this->belongsTo(User::class, 'vendor_id');
    }

    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }
}

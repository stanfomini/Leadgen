<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZipCode extends Model
{
    use HasFactory;

	 protected $fillable = [
        'vendor_id',
        'zip_code',
    ];

    // Relationship with Vendor (User)
    public function vendor()
    {
        return $this->belongsTo(User::class, 'vendor_id');
    }
}

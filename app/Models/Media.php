<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

	 protected $fillable = [
        'owner_id',
        'owner_type',
        'file_path',
        'file_type',
    ];

    // Polymorphic relationship
    public function owner()
    {
        return $this->morphTo();
    }	
}

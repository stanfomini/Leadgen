<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

	 protected $fillable = [
        'sender_id',
        'receiver_id',
        'job_id',
        'content',
        'from_openai',
    ];

    // Relationship with Sender (User)
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    // Relationship with Receiver (User)
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    // Relationship with Job
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}

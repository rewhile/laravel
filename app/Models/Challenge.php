<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'hint', 
        'file_path',
        'teacher_id',
    ];

    /**
     * Get the teacher who created this challenge
     */
    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }
}

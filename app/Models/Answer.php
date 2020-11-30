<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'answer_1',
        'answer_2',
        'answer_3',
        'answer_4',
        'which_is_right'
    ];

    public function question() {
        return $this->belongsTo(Question::class);
    }
}




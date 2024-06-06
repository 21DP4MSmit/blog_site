<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewCommentModel extends Model
{
    use HasFactory;

    protected $table = 'review_comment';

   
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saved extends Model
{
    use HasFactory;
    protected $table = 'saved';
    protected $fillable = [
        'id_user',
        'id_post'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function post() {
        return $this->belongsTo(Post::class, 'id_post');
    }
}

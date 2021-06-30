<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'publisher_id',
        'published',
        'title',
        'image',
        'description'
    ];

    public function publisher(){
        return $this->belongsTo(User::class,'publisher_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;


    public function items(){
        return $this->hasMany(PageItem::class, 'page_id', 'id');
    }

    // if user is deleted than auto delete depended data
    public static function boot() {
        parent::boot();
        static::deleting(function($page) {
            $page->items()->delete();
        });
    }
}

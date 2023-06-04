<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'description' , 'image' , 'tags' , 'sender'];

    public function scopeFilter($query, array $filters){
        if($filters['tag'] ?? false){
            $query->where('tags', 'like' , '%' . $filters['tag'] . '%');
        }

        if($filters['search'] ?? false){
            $query->where('tags', 'like' , '%' . $filters['search'] . '%')
                    ->orWhere('title', 'like' , '%' . $filters['search'] . '%');
        }
    }
}

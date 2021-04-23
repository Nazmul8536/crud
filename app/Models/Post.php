<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable = [
        'title',
        'description',
        'slug',
        'user_id',
        'image_path',
    ];
    public function post(){
        return $this->hasMany(Post::class);
    }
    public function Sluggable(): array
    {
        return [
            'slug' => [
               'source' => 'title'
            ]
        ];
    }
}

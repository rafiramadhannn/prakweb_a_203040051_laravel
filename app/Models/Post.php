<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    // protected $fillable = ['title', 'excerpt', 'author', 'body'];
    protected $guarded = ['id'];
    protected $with = ['category', 'user'];

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return  $query->where('title', 'like', '%' . $search . '%')
                ->orwhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Stephenjude\FilamentBlog\Models\Post;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = [
        'blog_post_id',
        'name',
        'email',
        'website',
        'comment',
    ];
    public function post():BelongsTo
    {
        return $this->belongsTo(Post::class,'blog_post_id');
    }
}

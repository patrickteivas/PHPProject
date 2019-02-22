<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content', 'author',
    ];

    /**
     * Get the post that owns the comment.
     */

    public function post_id()
    {
        return $this->belongsTo("App\Post");
    }

    public function author_id()
    {
        return $this->belongsTo("App\User");
    }

}

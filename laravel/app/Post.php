<?php
/**
 * File name : Post.php
 * Created by PhpStorm.
 * User: kaspar.suursalu
 * Date: 01.02.2019
 * Time: 13:56
 */

namespace App;


use App\Http\Controllers\PostController;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'title', 'content', 'author',
    ];

    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
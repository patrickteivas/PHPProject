<?php
/**
 * File name : Post.php
 * Created by PhpStorm.
 * User: kaspar.suursalu
 * Date: 01.02.2019
 * Time: 13:56
 */

namespace App;


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
}
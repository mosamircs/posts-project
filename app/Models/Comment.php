<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attribute that mass assigned
     * @var string[]
     */
    protected $fillable = [
        'text',
        'post_id'
    ];

    /**
     * comment associated to one post
     * @return relation
     */
    public function post()
    {
        return $this->hasOne(Post::class);
    }
    //public $timestamps = false;
}

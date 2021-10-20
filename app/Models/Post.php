<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * the attribute that mass assigned
     * @var string[]
     */
    protected $fillable=[
        'text',
        'user_id'
    ];
    /**
     * Post has one user only
     * @return relation
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }

    /**
     * post has many comments
     * @return relation
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    //public $timestamps = false;
}

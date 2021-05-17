<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public $timestamps = true;

    // table associated with the model
    protected $table = 'blogs';

    // primary key
    protected $primaryKey = 'id';

    // fillable
    protected $fillable = [
        'title',
        'image',
        'description',
        'detail',
        'user_id',
    ];

      /**
     * Get the user that owns the blog.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

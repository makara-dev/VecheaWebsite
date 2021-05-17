<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurClient extends Model
{
    use HasFactory;

    public $timestamps = true;

    // table associated with the model
    protected $table = 'our_clients';

    // primary key
    protected $primaryKey = 'id';

    // fillable
    protected $fillable = [
        'name',
        'company_name',
        'love_point',
        'max_love_point',
        'detail',
        'logo_path',
        'favorite_logo_path',
    ];

}

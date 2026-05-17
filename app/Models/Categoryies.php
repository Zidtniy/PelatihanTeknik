<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Karyas;

class Categoryies extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name_cat', 'slug'
    ];

    public function karya()
    {
        return $this->belongsTo(Karyas::class);
    }
}

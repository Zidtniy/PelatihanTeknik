<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';
    protected $primaryKey = 'id_activity';
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'nama_aktifitas',
        'kuadran',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}

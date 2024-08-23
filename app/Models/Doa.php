<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doa extends Model
{
    use HasFactory;
    protected $table = 'doa';
    protected $primaryKey = 'id_doa';
    protected $fillable = [
        'username',
        'id_user',
        'doa',
        'jumlah_likes',
        'id_campaign',

    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visi extends Model
{
    use HasFactory;

    protected $table = 'visi';
    protected $primaryKey = 'id_visi';
    protected $fillable = [
        'visi',
    ];
}

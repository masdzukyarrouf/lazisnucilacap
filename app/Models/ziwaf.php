<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ziwaf extends Model
{
    use HasFactory;
    protected $table = 'ziwaf';
    protected $primaryKey = 'id_ziwaf';
    protected $fillable = [
        'username',
        'id_transaction',
        'no_telp',
        'email',
        'nominal',
        'jenis_ziwaf',
    ];
}

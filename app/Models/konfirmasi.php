<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konfirmasi extends Model
{
    use HasFactory;
    protected $table = 'konfirmasi';
    protected $primaryKey = 'id_konfirmasi';
    protected $fillable = [
        'id_user',
        'nama',
        'no_telp',
        'email',
        'campaign',
        'bukti',
    ];
}

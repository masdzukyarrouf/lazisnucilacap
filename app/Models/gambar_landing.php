<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class gambar_landing extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'gambar_landing';
    protected $primaryKey = 'id_gambar';
    protected $fillable = [
        'gambar',
        'link'
    ];
}

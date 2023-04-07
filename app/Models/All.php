<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class All extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'id_siswa',
        'kelas'
    ];

    public function scopeSemua($query) {
        return $query;
    }

}

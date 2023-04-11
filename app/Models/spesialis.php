<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spesialis extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function dokter(){
        return $this->hasMany(dokter::class);
    }
}

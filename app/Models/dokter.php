<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class dokter extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function spesialis(){
        return $this->hasOne(spesialis::class);
    }
}

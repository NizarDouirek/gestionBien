<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    use HasFactory;
    protected $fillable = [
         'code',
         'description',
         'marque',
         'etat',
         'occupe'
    ];
    protected $hidden = [
        'occupe'
    ];
}

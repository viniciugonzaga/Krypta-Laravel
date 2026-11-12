<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    // Permite que esses campos sejam preenchidos em massa (Mass Assignment)
    protected $fillable = ['name', 'description', 'price', 'features'];
}
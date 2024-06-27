<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SizeGlass extends Model
{
    use HasFactory;

    protected $fillable = ['NameSizeGlass'];

    public $timestamps = false; 
}

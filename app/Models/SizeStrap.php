<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SizeStrap extends Model
{
    use HasFactory;

    protected $fillable = ['NameSizeStrap'];

    public $timestamps = false; 
}
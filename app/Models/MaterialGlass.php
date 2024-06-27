<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialGlass extends Model
{
    use HasFactory;

    protected $fillable = ['NameMaterialGlass'];

    public $timestamps = false; 
}

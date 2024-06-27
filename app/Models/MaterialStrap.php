<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialStrap extends Model
{
    use HasFactory;

    protected $fillable = ['NameMaterialStrap'];

    public $timestamps = false; 
}
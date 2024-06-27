<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvoidWater extends Model
{
    use HasFactory;

    protected $fillable = ['NameAvoidWater'];

    public $timestamps = false; 
}
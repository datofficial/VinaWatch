<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable = ['NameWatch', 'DescriptionWatch', 'PriceWatch', 'ImageWatch', 'IDManufacturer', 'IDCategory'];

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class, 'IDManufacturer');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'IDCategory');
    }
}
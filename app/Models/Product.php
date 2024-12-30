<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
    'genericname',
    'brand',
    'price',
    'category',
    'dosage',
    'unitmeasurement',
    'batchnumber',
    'barcode',
    'image',
    'isRx',
    'description'
  ];
}

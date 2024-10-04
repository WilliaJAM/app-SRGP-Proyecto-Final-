<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier_product extends Model
{
    use HasFactory;
    protected $fillable= ['price', 'amount', 'creation_date', 'category_id'];

}

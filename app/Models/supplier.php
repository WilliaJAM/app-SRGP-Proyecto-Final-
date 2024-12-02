<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;
    protected $fillable = [
    "supplier_name",
    "email",
    "phone",
    "type_phone",
    "address",
    "city_id"
];
}

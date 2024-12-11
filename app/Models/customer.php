<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $fillable= [
    "name", 
    "documentType", 
    "identificationNumber", 
    "email", 
    "phone",
    "type_phone",
    "neighborhood_name",
    "address",
    "city_id",
    "rol_id"
];
}

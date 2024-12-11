<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_table extends Model
{
    use HasFactory;
    protected $fillable= [
    "name",
    "last_name", 
    "image", 
    "cedula", 
    "birthdate", 
    "password", 
    "gender", 
    "registration_date", 
    "account_status", 
    "email", 
    "user_id", 
    "rol_id", 
    "phone",
    "type_phone",
    "neighborhood_name",
    "address",
    "city_id"
];
}

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
    "last_date_of_entry", 
    "account_status", 
    "email", 
    "user_id", 
    "rol_id", 
    "address_id", 
    "phone_id", 
    "card_id"
    
        ];
}

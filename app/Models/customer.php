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
    "phone_id", 
    "address_id"
];
}

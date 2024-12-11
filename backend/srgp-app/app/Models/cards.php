<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cards extends Model
{
    use HasFactory;
    protected $fillable= ["expiration_date", "CVV", "card_number", "name_of_the_holder", "bank_id", "brand_id", "card_type_id"];
}

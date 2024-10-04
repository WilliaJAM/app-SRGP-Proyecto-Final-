<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventory extends Model
{
    use HasFactory;
    protected $fillable= ["name","quantity_in_stock","departure_date","date_of_entry","supplier_id"];
}

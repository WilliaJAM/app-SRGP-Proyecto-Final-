<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class countries extends Model
{
    use HasFactory;
    protected $fillable=['name', 'code', 'three_letter_code', 'currency', 'telephone_prefix'];
}

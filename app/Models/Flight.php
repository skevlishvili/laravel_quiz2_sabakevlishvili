<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $table = "flights";
    protected $fillable = ["identification_code", "leave_airport_name", "cum_airport_name", "leave_time", "cum_time"];
}

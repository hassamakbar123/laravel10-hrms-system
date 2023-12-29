<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    protected $fillable = [
        'position_name',
        'daily_rate',
        'monthly_rate',
        'working_days_per_month'
    ];
}

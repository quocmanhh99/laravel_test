<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testModelOne extends Model
{
    use HasFactory;
    protected $table = 'testone';
}

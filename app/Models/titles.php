<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class titles extends Model
{
    use HasFactory;
    protected $fillable = [
        'team_1_position',
    ];
}

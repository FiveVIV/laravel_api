<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Philosopher extends Model
{
    protected $fillable = [
        "name",
        "life",
        "school",
        "notes",
    ];
}

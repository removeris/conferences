<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Conference extends Model
{
    protected $fillable = [
        'title',
        'description',
        'date',
        'address'
    ];
}

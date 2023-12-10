<?php

namespace App\Models\codes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Codes extends Model
{
    use HasFactory;

    protected $table = 'codes';
    protected $fillable = [
        'name',
        'code'
    ];
}

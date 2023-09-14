<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Company extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'name',
        'email',
        'website',
        'image',
    ];
}

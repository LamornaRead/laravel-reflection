<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Company extends Model
{
    use HasFactory;
    
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
    
    public function scopeFilter($query) 
    {
        if(request('search')) {
            $query->where('name', 'like', '%' . request('search') . '%');
        }
    }
    
    protected $fillable = [
        'name',
        'email',
        'website',
        'image',
    ];
}

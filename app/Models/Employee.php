<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function scopeFilter($query) 
    {
        if(request('search')) {
            $query->where('first_name', 'like', '%' . request('search') . '%')
            ->orWhere('last_name', 'like', '%' . request('search') . '%');
        }
    }
    
    protected $fillable = [
        'first_name',
        'last_name',
        'company_id',
        'email',
        'phone_number'
    ];
}

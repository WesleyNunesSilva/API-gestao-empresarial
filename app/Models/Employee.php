<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'cpf',
        'phone',
        'city',
        'position',
        'company_id'
    ];

    public function companies(): belongsTo {
        return $this->belongsTo(Company::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'First_Name',
        'Last_Name',
        'Birthday',
        'Description',
        'Address',
        'Additional_Info',
        'Zip_Code',
        'Place',
        'Country',
        'email',
    ];

    // Add a custom accessor for displaying full name
    public function getFullNameAttribute(): string
    {
        return "{$this->First_Name} {$this->Last_Name}";
    }
}
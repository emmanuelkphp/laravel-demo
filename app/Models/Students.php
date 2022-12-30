<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $fillable = [
    	'firstname',
    	'lastname',
    	'enrollment_number',
    	'gr_number',
    	'address',
    	'address_two',
    	'city',
    	'state',
    	'zip_code',
    	'course',
    	'gender',
    	'birth_date',
    	'is_active'
    ];
}

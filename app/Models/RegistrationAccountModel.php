<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationAccountModel extends Model
{
    use HasFactory;
    protected $table="registration";
    protected $fillable = [
        'Username', 
        'Password',
        'FullNames',
        'AccountNumber',
        'Email',
        'AccountType', 
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // Table name
    protected $table = 'tbluser';

    // Fillable columns
    protected $fillable = [
        'username',
        'password',
        'gender'
    ];

    public $timestamps = false;
    protected $primaryKey = 'userid';
}

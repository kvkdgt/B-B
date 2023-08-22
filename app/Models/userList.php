<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userList extends Model
{
    use HasFactory;
    protected $table = "userList";
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];
}

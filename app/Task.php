<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'status',
        'user_id',
        'title',
        'status',
        'due_date'
    ];
}

<?php

namespace App\Structure\TaskSection\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    
    protected $guarded = [];
    
    public $timestamps = false;   
}


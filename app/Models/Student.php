<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $table = 'students';
    use HasFactory;
    
    protected $fillable =[
        'st_ID','st_name','st_email'
    ];
}

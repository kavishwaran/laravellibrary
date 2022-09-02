<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lendbook1 extends Model
{
    protected $table = 'lendbook1';
    use HasFactory;
    protected $fillable =[
        'book_ID','stu_id','date'
    ];
}

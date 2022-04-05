<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [

       'image', 'name', 'role', 'content', 'feedback', 'customerName', 'intro', 'skill', 'percent', 'tabOneTitle', 'tabOneContent', 'tabTwoTitle', 'tabTwoContent',  'tabThreeTitle', 'tabThreeContent' 

    ];

}
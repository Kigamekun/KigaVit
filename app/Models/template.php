<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class template extends Model
{
    protected $table = "template";
    protected $fillable = ['title','price','author','description','category','premium','thumb'];
    use HasFactory;
}

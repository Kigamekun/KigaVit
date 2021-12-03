<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = "category";
    protected $fillable = ['category','slug','description','thumb'];
    use HasFactory;
}

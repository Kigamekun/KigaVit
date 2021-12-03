<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class like_template extends Model
{
    protected $table = "like_template";
    protected $fillable = ['user_id','template_id'];
    use HasFactory;
}

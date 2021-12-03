<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client_template extends Model
{
    protected $table = 'client_template';
    protected $fillable = ['user_id','template_id','music'];
    use HasFactory;
}

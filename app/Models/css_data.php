<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class css_data extends Model
{
    protected $table = 'css_data';
    protected $fillable = ['template_id','type','file'];
    use HasFactory;
}

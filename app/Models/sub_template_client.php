<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_template_client extends Model
{
    protected $table = 'sub_template_client';
    protected $fillable = ['resource_id','user_id','section_code'];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_template extends Model
{
    protected $table = 'sub_template';
    protected $fillable = ['template_id','section_code','sort_section'];
    use HasFactory;
}

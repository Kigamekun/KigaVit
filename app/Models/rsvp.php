<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rsvp extends Model
{
    protected $table = "rsvp";
    protected $fillable = ['name','type','message','count','respon','attend','date'];
    use HasFactory;
}

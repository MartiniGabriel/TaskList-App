<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class day extends Model
{
    protected $fillable = [ 'id', 'description', 'date'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $fillable = ['id', 'description', 'day_id', 'classification_id', 'tag_id', 'status', 'obs'];
}

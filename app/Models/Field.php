<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;
    protected $table = 'field_pass';
    protected $primaryKey = 'field_id';
    public $timestamps = false;
    protected $guarded = [];
}

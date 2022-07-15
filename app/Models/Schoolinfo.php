<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schoolinfo extends Model
{
    use HasFactory;
    protected $table = 'schoolinfo';
    protected $primaryKey = 'skid';
    public $timestamps = false;
    protected $guarded = [];
}

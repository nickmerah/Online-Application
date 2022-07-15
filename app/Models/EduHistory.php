<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EduHistory extends Model
{
    use HasFactory;
    protected $table = 'eduhistory';
    protected $primaryKey = 'eh_id';
    public $timestamps = false;
    protected $guarded = [];
}

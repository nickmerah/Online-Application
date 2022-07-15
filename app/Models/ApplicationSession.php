<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationSession extends Model
{
    use HasFactory;
    protected $table = 'app_current_session';
    protected $primaryKey = 'cs_id';
    public $timestamps = false;
    protected $guarded = [];
}

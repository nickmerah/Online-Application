<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantLogin extends Model
{
    use HasFactory;
    protected $table = 'applogin';
    protected $primaryKey = 'log_id';
    public $timestamps = false;
    protected $guarded = [];
}

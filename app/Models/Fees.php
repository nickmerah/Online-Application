<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    use HasFactory;
    protected $table = 'fees_amt_pass';
    protected $primaryKey = 'fee_id';
    public $timestamps = false;
    protected $guarded = [];
}

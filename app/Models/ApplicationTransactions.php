<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationTransactions extends Model
{
    use HasFactory;
    protected $table = 'transaction_app';
    protected $primaryKey = 'trans_id';
    public $timestamps = false;
    protected $guarded = [];
}

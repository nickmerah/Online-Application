<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OlevelResult extends Model
{
    use HasFactory;
    protected $table = 'olevels';
    protected $primaryKey = 'o_id';
    public $timestamps = false;
    protected $guarded = [];
}

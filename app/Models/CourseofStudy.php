<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseofStudy extends Model
{
    use HasFactory;
    protected $table = 'dept_options';
    protected $primaryKey = 'do_id';
    public $timestamps = false;
    protected $guarded = [];
}

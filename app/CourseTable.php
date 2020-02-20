<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseTable extends Model
{
    protected $table = 'courses_table';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}

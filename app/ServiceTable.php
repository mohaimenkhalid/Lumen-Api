<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceTable extends Model
{
    protected $table = 'services_table';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}

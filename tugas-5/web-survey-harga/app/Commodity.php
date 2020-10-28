<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    protected $table = 'tb_commodity';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    public $timestamps = false;
}

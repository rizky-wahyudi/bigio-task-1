<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surveyor extends Model
{
    protected $table = 'tb_surveyor';
    protected $primaryKey = 'username';
    protected $keyType = 'string';
    public $timestamps = false;
}

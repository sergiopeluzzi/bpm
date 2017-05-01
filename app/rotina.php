<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rotina extends Model
{
    //
    protected $table = 'rotinas';
    protected $fillable = ['nome','descricao','id_admin','status'];
}

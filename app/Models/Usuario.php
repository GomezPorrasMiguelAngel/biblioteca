<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $primarykey = 'id';
    public $timestamps =  false;
    protected $filllable = ['id','name','apePat','apeMat','email'];
}
?>
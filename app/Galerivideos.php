<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Galerivideos extends Model
{
    protected $table = 'galerivideos';


    protected $fillable = ['title','videolink'];
}


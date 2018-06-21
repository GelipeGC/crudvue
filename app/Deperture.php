<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deperture extends Model
{
    public $timestamps = false;
    protected $fillable = ['title'];

    public function positions()
    {
    	return $this->hasMany(Position::class);
    }
}

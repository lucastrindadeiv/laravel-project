<?php

namespace App;

use Illuminate\Database\Eloquent\Model; // chama o Eloquent

class Lista extends Model {
	protected $table = 'lista';
	public $timestamps = false;
}
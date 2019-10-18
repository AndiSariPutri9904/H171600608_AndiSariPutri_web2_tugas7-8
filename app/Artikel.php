<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Artikel extends Model
{
	use softDeletes;

     protected $table ='artikel';

    protected $fillable = ['judul','isi', 'users_id','kategori_artikel_id',];
}

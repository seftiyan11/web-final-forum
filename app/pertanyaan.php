<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class pertanyaan extends Model
{
    protected $table = 'pertanyaan';

    protected $fillable = ['judul', 'content', 'file', 'kategori_id', 'users_id'];
    //
}

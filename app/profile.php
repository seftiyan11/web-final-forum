<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $table = 'profile';

    protected $fillable = ['umur', 'alamat', 'bio', 'users_id'];
    
    public function user()
    {
        return $this->belongsTo('App\User', 'users_id');
    }
}

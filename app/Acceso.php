<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acceso extends Model
{
    protected $table    = "accesos";
    protected $fillable = ['id', 'user_id', 'status', 'ip', 'date'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

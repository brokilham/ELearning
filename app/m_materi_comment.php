<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_materi_comment extends Model
{
    protected $table = 'm_materi_comment';

    public function User()
    {
        return $this->belongsTo('App\User','created_by');   
    }

}

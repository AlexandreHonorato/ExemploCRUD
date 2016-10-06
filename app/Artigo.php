<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model {

    protected $fillable = [ "titulo", "conteudo", "user_id" ];

    function User(){
        return $this->hasOne(User::class, "id", "user_id");
    }

}

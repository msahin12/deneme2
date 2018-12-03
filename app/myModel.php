<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myModel extends Model
{
    //
    protected $table = "haberler";

    protected $fillable = ["baslik","icerik"];

    public $timestamps = false; //created_at ve updated_at gerekmemesi için
}

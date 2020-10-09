<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Login extends Model
{
    protected $table = "login";
    protected $primaryKey = "uid";
    public $timestamps = false;
    protected $guarded = [];
}

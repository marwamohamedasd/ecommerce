<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


// extends Model

class Admin extends Authenticatable
{

   // use HasFactory;

    protected $table="admins";
    protected  $guarded=[];
    public  $timestamps =true;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable=['User_Name','User_Email','User_PhoneNo','message_body'];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    //
    protected $fillable = [
     'message_form',
     'name',
     'email',
     'subject'
    ];
    
}

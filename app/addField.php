<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addField extends Model
{
    
   // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guard='edudetails';
    protected $fillable = [
        'firstname', 'lastname', 'age','10thpercent','12thpercent','highest_qualification',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];  
}

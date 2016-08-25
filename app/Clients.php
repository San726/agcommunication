<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    //
    protected $fillable = [
                        'area',
                        'username',
                        'password',
                        'name',
                        'email',
                        'Father',
                        'Mother',
                        'Company',
                        'gender',
                        'dob',
                        'PresentAddress',
                        'PermanentAddress',
                        'connectedFrom',
                        'phone',
                        'bill',
                        'dataScheme',
                        'payment',
                        'status',
                        'comments'
                    ];
}

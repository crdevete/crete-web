<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $table = 'surveys';

    protected $fillable  = [

        'question_1','question_2','question_3','question_4','question_5','question_6','question_7','question_8','question_9'

    ];

    protected $guarded = array('_token');
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = [

        'first_name','last_name','email','social_profile','phone','city','age','current_job','other_job','graduation_year','school_stage',
        'school_name','faculty','university','other_faculty','other_university','company','job_role','years_of_experience','freelancer_before',
        'freelancing_Job','other_freelancing_job','freelancing_websites','websites_link','comment'
    ];

    protected $table = 'submissions';

    protected $guarded = array('_token');
}

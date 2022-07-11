<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Records extends Model
{
    use HasFactory;

    protected $table = 'records';

    protected $fillable = ['name',	'student',	'course',	'session_date',	'level',	'phone_number',	'company_name',	'company_phone_number',	'company_address',	'date_reported',	'industry_supervisor_name',	'company_supervisor_telephone',	'company_supervisor_post',	'monthly_allowance',	'residential_address_during_training',	'final_training_date',	'school_supervisor_staff_id',	'grade',	'comment',	'comment_by',	'graded_by'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'designation_id',
        'department_id',
        'country_id',
        'mobile',
        'gender',
        'joining_date',
        'birth_date',
        'reporting_to',
        'language_id',
        'address',
        'about',
        'login_permission',
        'notification_permission',
        'hourly_rate',
        'slack_username',
        'skills',
    ];

    public function designation(){
        return $this->belongsTo(Designation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}

<?php

namespace App;

use App\Visit;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Activitylog\LogsActivity;
use Spatie\Activitylog\LogsActivityInterface;

class User extends Authenticatable implements LogsActivityInterface
{
    use LogsActivity;

    protected $fillable = [
        'name', 'email', 'password', 'is_disabled',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'is_admin' => 'boolean',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function visits()
    {
        return $this->hasMany(Visit::class);
    }

    public function disabledTag()
    {
        return formatter()->disabledTag($this->is_disabled);
    }

    public function getActivityDescriptionForEvent($eventName)
    {
        return activity()->log($eventName, $this);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogsActivity;
use Spatie\Activitylog\LogsActivityInterface;

class Visit extends Model implements LogsActivityInterface
{
    use LogsActivity;
    use SoftDeletes;

    protected $fillable = [
        'name', 'is_visited', 'description',
    ];
    protected $casts = [
        'is_visited' => 'boolean',
    ];
    protected $dates = ['deleted_at'];

    public function getUpdateAtAttribute($value)
    {
        return $this->is_visited ? formatter()->toDDMMYYYY($value) : '';
    }

    public function visitedTag()
    {
        $success = formatter()->toIcon('text-danger', 'done');
        $default = formatter()->toIcon('text-hidden', 'done');

        return $this->is_visited ? $success . '&nbsp;' : $default . '&nbsp;';
    }

    public function getActivityDescriptionForEvent($eventName)
    {
        return activity()->log($eventName, $this);
    }
}

<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class TrashedScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        return $builder->withTrashed()->orderBy('created_at', 'desc');
    }
}

// use:
// Task::addGlobalScope(new TrashedScope);

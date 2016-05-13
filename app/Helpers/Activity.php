<?php

namespace App\Helpers;

class Activity
{
    const INSERT = 1;
    const UPDATE = 2;
    const DELETE = 3;

    public function log($eventName, $model)
    {
        if (!setting()->get('log_enabled')) {
            return '';
        }

        $action = self::DELETE;

        if ($eventName == 'created') {
            $action = self::INSERT;
        } else if ($eventName == 'updated') {
            $action = self::UPDATE;
        }

        $modified = false;
        $log      = $model->getTable() . ';' . $action . ';' . $model->id;
        $original = $model['original'];

        foreach ($model->toArray() as $attribute => $value) {

            if ($attribute == 'id') {
                continue;
            } elseif ($attribute == 'password') {
                $value = ';';
            }

            if ($action == self::UPDATE) {

                if ($original[$attribute] != $value) {
                    $modified = true;
                    $log .= ';' . (string) $value;

                } else {
                    $log .= ';';
                }

            } else {
                // INSERT/DELETE
                $modified = true;
                $log .= ';' . (string) $value;
            }
        }

        return $modified ? $log : '';
    }
}

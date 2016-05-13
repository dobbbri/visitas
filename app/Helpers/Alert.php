<?php

namespace App\Helpers;

class Alert
{

    public function info($message, $level = 'info')
    {
        session()->flash('alert_message', $message);
        session()->flash('alert_level', $level);

        if ($level == 'danger') {
            session()->flash('alert_icon', 'error_outline');

        } else if ($level == 'success') {
            session()->flash('alert_icon', 'check');

        } else {
            session()->flash('alert_icon', 'info_outline');
        }
    }

    public function danger($message)
    {
        $this->info($message, 'danger');
    }

    public function success($message)
    {
        $this->info($message, 'success');
    }

}

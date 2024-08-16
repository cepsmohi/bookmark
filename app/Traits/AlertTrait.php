<?php

namespace App\Traits;

trait AlertTrait
{
    private function handleAlert()
    {
        $alert = session('alert');
        if ($alert) {
            $this->alert('success', $alert, [
                'position' => 'center',
                'toast' => false,
                'timer' => 2000,
                'timerProgressBar' => true,
            ]);
        }
    }
}

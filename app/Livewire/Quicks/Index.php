<?php

namespace App\Livewire\Quicks;

use App\Models\QuickButton;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $quicks = QuickButton::orderBy('position')
            ->orderBy('id')
            ->get();
        return view('livewire.quicks.index', compact('quicks'));
    }
}

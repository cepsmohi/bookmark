<?php

namespace App\Livewire\Quicks;

use App\Models\QuickButton;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Index extends Component
{
    public $showEditForm = false;
    public $squick;

    #[Rule('nullable|numeric')]
    public $position;

    public function editQuick($id)
    {
        $this->squick = QuickButton::find($id);
        $this->position = $this->squick->position;
        $this->showEditForm = true;
    }

    public function updateQuick()
    {
        $this->validate();
        $this->squick->update([
            'position' => $this->position
        ]);
        session()->flash('alert', 'Quickie Updated');
        return redirect(route('quicks'));
    }

    public function deleteQuick()
    {
        $this->squick->delete();
        session()->flash('alert', 'Quickie Deleted');
        return redirect(route('quicks'));
    }

    public function render()
    {
        $quicks = QuickButton::orderBy('position')
            ->orderBy('id')
            ->get();
        return view('livewire.quicks.index', compact('quicks'));
    }
}

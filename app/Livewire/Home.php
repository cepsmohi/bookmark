<?php

namespace App\Livewire;

use App\Models\Category;
use App\Traits\AlertTrait;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;
    use LivewireAlert;
    use AlertTrait;

    public function mount()
    {
        $this->handleAlert();
    }
    public function render()
    {
        return view('livewire.home', [
            'categories' => Category::all(),
        ]);
    }
}

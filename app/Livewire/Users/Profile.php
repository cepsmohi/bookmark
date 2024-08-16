<?php

namespace App\Livewire\Users;

use Livewire\Attributes\Rule;
use Livewire\Component;

class Profile extends Component
{
    public $user;

    #[Rule('required|string')]
    public $name;

    public $email;
    public function rules()
    {
        return [
            'email' => 'required|string|email|max:255|unique:users,email,' . $this->user->id,
        ];
    }

    public function mount()
    {
        $this->user = cusr();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

    public function updateUser()
    {
        $this->validate();
        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);
        session()->flash('alert', 'Info Updated');
        return redirect(route('home'));
    }
    public function render()
    {
        return view('livewire.users.profile');
    }
}

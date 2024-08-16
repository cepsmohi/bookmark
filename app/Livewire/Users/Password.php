<?php

namespace App\Livewire\Users;

use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Password extends Component
{
    public $user;

    #[Rule('required|string|min:4')]
    public $password;

    #[Rule('required|string|min:4')]
    public $confirm;

    public function mount()
    {
        $this->user = cusr();
    }
    public function updatePass()
    {
        $this->validate();
        if ($this->password == $this->confirm) {
            $this->user->update([
                'password' => Hash::make($this->password),
            ]);
        } else {
            $this->addError('confirm', 'Not matched');
            return;
        }
        session()->flash('alert', 'Password Changed');
        return $this->redirect('/home', navigate: true);
    }
    public function render()
    {
        return view('livewire.users.password');
    }
}

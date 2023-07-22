<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;

class ListUsers extends Component
{
    public function createUser() {
        $this->dispatchBrowserEvent('show-form');
    }

    public function render()
    {
        return view('livewire.admin.users.list-users');
    }
}

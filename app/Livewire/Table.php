<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Table extends Component
{
    public $selected_role = '';
    public $search = '';

    public function filterRole($role)
    {
        $this->selected_role = $role;
    }

    public function render()
    {
        // Filter users based on the selected role
        $users = User::when($this->selected_role, function ($query) {
            return $query->where('role', $this->selected_role);
        })
        ->when($this->search, function ($query) {
            return $query->where('name', 'like', '%'.$this->search.'%');
        })
        ->get();

        return view('livewire.table', [
            'users' => $users
        ]);
    }
}

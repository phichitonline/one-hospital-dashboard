<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class SearchUsers extends Component
{

    public $search = '';
    public $year;

    public function render()
    {
        $users = User::where('username', $this->search)->get();

        return view('livewire.search-users', [
            'users' => $users,
        ])->layout('livewire.layouts.base');
    }
}

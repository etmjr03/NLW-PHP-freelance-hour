<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Search extends Component
{
    public string $search = '';

    public function render()
    {
        return view('livewire.search', [
            'users' => User::query()->where('name', 'like', '%' . $this->search . '%')->get()
        ]);
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchUsers extends Component
{
    public $query;
    public $users;
    public $filteredUsers;

    public function mount()
    {
        // Sample data
        $this->users = [
            ['name' => 'John Doe'],
            ['name' => 'Jane Smith'],
            ['name' => 'Alice Johnson'],
            ['name' => 'Bob Brown'],
        ];

        $this->filteredUsers = $this->users;
    }

    public function updatedQuery()
    {
        $this->filteredUsers = array_filter($this->users, function ($user) {
            return stripos($user['name'], $this->query) !== false;
        });
    }

    public function render()
    {
        return view('livewire.search-users');
    }
}

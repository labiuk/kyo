<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;
use App\Models\User;

class UserManagement extends Component
{   
    public $users = [];
    public function mount() {
        $this->users = User::all();
    }
    public function render()
    {   
        return view('livewire.laravel-examples.user-management');
    }
}

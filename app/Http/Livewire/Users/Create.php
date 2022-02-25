<?php

namespace App\Http\Livewire\Users;

use App\Events\UserCreated;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public $name, $email, $password;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
    ];

    public function store()
    {
        $this->validate();
        $user =  new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = bcrypt($this->password);
        $user->save();
        UserCreated::dispatch($user);
    }
    public function render()
    {
        return view('livewire.users.create');
    }
}

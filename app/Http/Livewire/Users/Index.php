<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $listeners = ['refresh' => 'userCreated'];
    public function userCreated($user)
    {
        return $user;
    }
    public function render()
    {
        $users = User::latest()->paginate(10);
        return view('livewire.users.index',[
            'users' => $users
        ]);
    }
}

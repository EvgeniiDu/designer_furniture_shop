<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class UserEditProfileComponent extends Component
{
    public $lastname;
    public $name;
    public $phone;

    public function __construct()
    {
        $this->lastname = Auth::user()->lastname;
        $this->name = Auth::user()->name;
        $this->phone = Auth::user()->phone;
    }


    public function editProfile(){
        $this->validate([
            'lastname' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:13', 'min:11'],
        ]);
        $user = User::find(Auth::user()->id);
        if(Auth::user()->lastname !== $this->lastname){
            $user->lastname = $this->lastname;
        }
        if(Auth::user()->name !== $this->name){
            $user->name = $this->name;
        }
        if(Auth::user()->phone !== $this->phone){
            $user->phone = $this->phone;
        }
        $user->save();
        session()->flash('edit_success', 'Дані профіля змінено успішно');
        return $this->redirect('/user/profile');
    }

    public function render()
    {
        return view('livewire.user.user-edit-profile-component')->layout('layouts.base');
    }
}

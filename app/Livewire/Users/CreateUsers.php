<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateUsers extends Component
{

    #[Validate('required', message: 'Preencha esse campo')]


    public $name = '';

    #[Validate('required', message: )]
    public $email = '';

    #[Validate('required|string')]
    public $cpf;

    #[Validate('required|date')]
    public $date_birth;
    

    public function create_user(){
        $validated = $this->validate();
        User::create($validated);

        return redirect()->route('index.home');
    }
    public function render()
    {
        return view('livewire.users.create-users');
    }
}

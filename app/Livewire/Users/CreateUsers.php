<?php

namespace App\Livewire\Users;

use App\Models\alunos;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateUsers extends Component
{

    #[Validate('required', message: 'Preencha esse campo')]

    public $first_name = '';


    #[Validate('required', message: 'Preencha com o sobrenome')]

    public $last_name = '';


    #[Validate('required', message: 'Esse campo precisa ser preenchido')]
    #[Validate('email', message: 'Esse campo precisa ser um email')]

    public $email = '';

    #[Validate('required', message: 'Coloque o CPF do aluno')]
    #[Validate('string', message: 'Coloque apenas numeros')]

    public $cpf;

    #[Validate('required', message: 'preencha a data de nascimento do aluno')]
    #[Validate('date', message: 'Esse campo precisa ser uma data')]
    
    public $date_birth;
    

    public function create_user(){
        $validated = $this->validate();
        alunos::create($validated);

        return redirect()->route('index.home');
    }
    public function render()
    {
        return view('livewire.users.create-users');
    }
}

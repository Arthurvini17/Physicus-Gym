<?php

namespace App\Livewire\Components;

use App\Models\alunos;
use Livewire\Component;

class Modal extends Component
{
    public function render()
    {
        return view('livewire.components.modal');
    }
  

    public function delete_aluno(alunos $aluno)
    {
        $this->authorize('delete_aluno', $aluno);
 
        $aluno->delete();
        }
    }


  


<?php

namespace App\Livewire;

use App\Models\alunos;
use Livewire\Component;

class ViewAlunos extends Component
{
    public function render()
    {
        $alunos = alunos::all();
        return view('livewire.view-alunos', ['alunos' => $alunos]);
    }


     public function delete($id)
    {
        $aluno = alunos::findOrFail($id);

        //o metodo authorize so funciona com pessoas que estao logadas
        $this->authorize('delete', $aluno);
 
        $aluno->delete();
        }
}

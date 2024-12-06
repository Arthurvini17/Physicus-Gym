<div class="overflow-x-auto">
    @vite('resources/css/app.css')

    <table class="w-full border border-collapse table-auto border-slate-300">
        <thead class="text-white bg-slate-500">
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Primeiro Nome</th>
                <th class="px-4 py-2">Sobrenome</th>
                <th class="px-4 py-2">CPF</th>
                <th class="px-4 py-2">Data de Nascimento</th>
                <th class="px-4 py-2">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alunos as $aluno)
            <tr class="text-center border-t border-slate-300">
                <td class="px-4 py-2">{{ $aluno->id }}</td>
                <td class="px-4 py-2">{{ $aluno->first_name }}</td>
                <td class="px-4 py-2">{{ $aluno->last_name }}</td>
                <td class="px-4 py-2">{{ $aluno->cpf }}</td>
                <td class="px-4 py-2">{{ $aluno->date_birth }}</td>
                <td class="flex justify-center gap-2 px-4 py-2">
                    <button class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">Editar</button>
                    <button wire:click="delete({{ $aluno->id }})"
                        class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-700">
                        Excluir
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>
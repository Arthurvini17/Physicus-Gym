<div>
    @vite('resources/css/app.css')

    <div class="flex justify-center text-center">
        <h1>Criar Cadastro De Aluno</h1>
    </div>

   
    <form wire:submit.prevent="create_user">
        <div class="grid items-center justify-center grid-cols-2 gap-2 text-center">
            <div>
                <label for="name">Nome do Cliente</label>
                <input type="text" wire:model="first_name" id="name" class="border">
                <div>
                    @error('first_name') <span class="text-red-500 error">{{ $message }}</span> @enderror
                </div>
            </div>


            <div>
                <label for="name">sobrenome do Cliente</label>
                <input type="text" wire:model="last_name" id="name" class="border">
                <div>
                    @error('last_name') <span class="text-red-500 error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div>
                <label for="email">Email Do Cliente</label>
                <input type="email" wire:model="email" id="email" class="border">
                <div>
                    @error('email') <span class="text-red-500 error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div>
                <label for="cpf">CPF Do Cliente</label>
                <input type="text" wire:model="cpf" id="cpf" class="border">
                <div>
                    @error('cpf') <span class="text-red-500 error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div>
                <label for="data_nascimento">Data De Nascimento Do Cliente</label>
                <input type="date" wire:model="date_birth" id="data_nascimento">

                <div>
                    @error('date_birth') <span class="text-red-500 error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-span-2">
                <button class="p-2 font-medium text-white bg-purple-400 rounded-md" type="submit">
                    Criar Cadastro
                </button>
            </div>
        </div>
    </form>
</div>

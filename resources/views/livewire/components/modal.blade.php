<!-- Modal -->
<div x-data="{ open: false, userId: null }" @open-modal.window="open = true; userId = $event.detail;"
    @close-modal.window="open = false;">
    <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-gray-600 bg-opacity-50">
        <div class="p-6 bg-white rounded shadow-lg">
            <h1 class="text-lg font-bold">Tem certeza que deseja excluir este usuário?</h1>
            <div class="flex justify-end mt-4">
                <button x-on:click="open = false" class="btn btn-secondary">Cancelar</button>
                <button wire:click="deleteUser" class="ml-2 btn btn-danger">Deletar</button>
            </div>
        </div>
    </div>
</div>
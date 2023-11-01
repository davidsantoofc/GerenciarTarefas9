<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista Tarefa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('tarefas.store') }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <input type="hidden" name="id_user" value="{{ Auth::user()->id }}"/>
                            <label>Tarefa</label>
                            <input name="nome" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label>Descricao</label>
                            <input name="descricao" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Prazo</label>
                            <input name="prazo" type="date" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label>Prioridade: </label><br>
                            <input type="radio" name="prioridade"  value="Baixa" checked /> Baixa
                            <input type="radio" name="prioridade" value="Média" /> Média
                            <input type="radio" name="prioridade"  value="Alta" /> Alta
                        </div>
                        <div class="form-group">
                            <label>Tarefa  concluída: </label>
                            <input type="checkbox"  name="concluida"  value="Sim" />
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<table class="table table-striped table-borded table-hover">
    <thead>
        <tr>
            <th>Tarefa</th>
            <th>Descrição</th>
            <th>Concluida</th>
            <th colspan="2" style="text-align:center">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tarefas as $tarefa)
        <tr>
            <td>{{ $tarefa->nome }}</td>
            <td>{{ $tarefa->descricao }}</td>
            <td>{{ $tarefa->concluida }}</td>
            <td><a href="/editar-tarefa/{{ $tarefa->id }}"></a></td>
            <td><a href="/visualizar-tarefa/{{ $tarefa->id }}"></a></td>
        </tr>
    @endforeach
    </tbody>
</table>




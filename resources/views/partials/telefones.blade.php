<p><a href="{{ route('telefone.create', ['idPessoa' => $pessoa->id]) }}" class="label label-primary">Novo Telefone</a></p>
<table class="table table-hover">
    @foreach($pessoa->telefones as $telefone)
        <tr>
            <td>{{ $telefone->descrição }}</td>
            <td>{{ $telefone->numero }}</td>
            <td><a href="{{ route('telefone.delete', ['id' => $telefone->id]) }}" class="text-danger" data-toggle="tooltip" data-placement="top" title="Apagar"><i class="fa fa-times-circle"></i></a></td>
        </tr>
    @endforeach
</table>
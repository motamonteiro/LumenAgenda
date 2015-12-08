@extends('layout')

@section('content')
    <div class="col-md-6">
        @include('partials.contato', ['pessoa' => $pessoa])
    </div>
    <div class="col-md-6">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('telefone.store', ['idPessoa' => $pessoa->id]) }}" method="post" class="form-horizontal">
            <input type="hidden" name="pessoa_id" value="{{ $pessoa->id }}">
            <div class="form-group">
                <label for="descrição" class="col-sm-2 control-label">Descrição</label>
                <div class="col-sm-10">
                    <select name="descricao" id="descricao" class="form-control">
                        <option value="">Escolha uma opção</option>
                        <option value="Comercial" {{ (old('descricao') == 'Comercial') ? 'selected' : null }}>Comercial</option>
                        <option value="Celular" {{ (old('descricao') == 'Celular') ? 'selected' : null }}>Celular</option>
                        <option value="Residencial" {{ (old('descricao') == 'Residencial') ? 'selected' : null }}>Residencial</option>
                        <option value="Recados" {{ (old('descricao') == 'Recados') ? 'selected' : null }}>Recados</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Código do País</label>
                <div class="col-sm-10">
                    <input type="number" name="codpais" class="form-control" id="codpais" placeholder="Código do País" value="{{ old('codpais') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">DDD</label>
                <div class="col-sm-10">
                    <input type="number" name="ddd" class="form-control" id="ddd" placeholder="DDD" value="{{ old('ddd') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Prefixo</label>
                <div class="col-sm-10">
                    <input type="number" name="prefixo" class="form-control" id="prefixo" placeholder="Prefixo" value="{{ old('prefixo') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Sufixo</label>
                <div class="col-sm-10">
                    <input type="number" name="sufixo" class="form-control" id="sufixo" placeholder="Sufixo" value="{{ old('sufixo') }}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@extends('base')

@section('content')
<h2 class="mb-4">Editar <b>tag</b></h2>
<p>Insira as informações abaixo para criar uma nova <b>tag</b> de tarefas.</p>
<form class="row g-3" action="{{ route('update_tag') }}" method="POST">
@csrf
    <div class="col-md-12">
        <label for="inputAddress" class="form-label">Descrição</label>
        <input type="text" class="form-control" id="description" name="description" value="{{ $tag->description }}">
    </div>
    <div class="col-md-12">
        <label for="inputPassword4" class="form-label">Cor</label>
        <input type="color" class="form-control" id="color" name="color" value=" {{ $tag->color }}">
    </div>

    <div class="col-md-12">
        <button class="btn btn-primary">Salvar</button>
    </div>

</form>
@endsection
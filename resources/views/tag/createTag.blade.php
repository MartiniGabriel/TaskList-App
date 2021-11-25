@extends('base')

@section('content')
<h2 class="mb-4">Criar <b>tag</b></h2>
<p>Insira as informações abaixo para criar uma nova <b>tag</b> de tarefas.</p>
<form class="row g-3" action="{{ route('create_tag') }}" method="POST">
@csrf
    <div class="col-md-12">
        <label for="inputAddress" class="form-label">Descrição</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="1234 Main St">
    </div>
    <div class="col-md-12">
        <label for="inputPassword4" class="form-label">Cor</label>
        <input type="color" class="form-control" id="color" name="color">
    </div>

    <div class="col-md-12">
        <button class="btn btn-primary">Salvar</button>
    </div>

</form>
@endsection
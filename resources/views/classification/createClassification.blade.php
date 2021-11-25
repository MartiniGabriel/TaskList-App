@extends('base')

@section('content')
<h2 class="mb-4">Criar <b>classificação</b></h2>
<p>Insira as informações abaixo para criar uma nova <b>classificação</b> de tarefas com sua pontuação.</p>
<form class="row g-3">

    <div class="col-md-12">
        <label for="inputAddress" class="form-label">Descrição</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="col-md-12">
        <label for="inputPassword4" class="form-label">Pontos</label>
        <input type="number" class="form-control" id="inputPassword4">
    </div>

    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>

</form>
@endsection
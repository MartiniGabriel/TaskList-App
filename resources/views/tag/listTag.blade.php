@extends('base')

@section('content')
<h2 class="mb-4">Suas <b>tags</b></h2>
<p>Visualize todas as suas <b>tags</b>. Clique no botão + para adicionar uma nova.</p>

<div class="d-flex ">
    <form action="/tag/create">
					<button type="submit" class="btn btn-primary rounded-circle">
	          <i class="fa fa-plus"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
</form>
        </div>

<div class="row g-3">

    <div class="col-md-12">

    <div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
  </table>
</div>

  
@endsection
@extends('layouts.app')

@section('content')

   hola mundo
<div class="container"> 
    
    
    <div class="alert alert-primary" role="alert">
    <button type="button" class="btn btn-outline-primary btn-sm">uno</button>
    <button type="button" class="btn btn-outline-secondary btn-sm">Secondary</button>
    <button type="button" class="btn btn-outline-success btn-sm">Success</button>
    <button type="button" class="btn btn-outline-danger btn-sm">Danger</button>
    </div>

    <table class="table table-bordered table-hover table-sm">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">FRUTO</th>
        <th scope="col">BODEGA</th>
        <th scope="col">UNIDAD</th>
        <th scope="col">PESO</th>
        <th scope="col">UNIDAD</th>
        <th scope="col">PESO</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Mark</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Mark</td>
        <td>@twitter</td>

        </tr>
    </tbody>
</table>


</div>



@endsection
@extends('layouts/admin')
@include('alerts.success')

@section('content')
        <table class="table table-sm table-hover" id="genre">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Genero</th>
              </tr>
            </thead>
            <tbody>
                <tr v-for="(genero, index) in generos">
                    <td>@{{genero.id}}</td>
                    <td>@{{genero.genre}}</td>                    
                    <td>                      
                    </td>
                </tr>
            </tbody>
        </table>
       
@endsection

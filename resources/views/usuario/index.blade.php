@extends('layouts/admin')
@include('alerts.success')

@section('content')
        <table class="table table-sm table-hover" id="app">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Operaciones</th>
              </tr>
            </thead>
            <tbody>
                <tr v-for="usuario in usuarios">
                    <td>@{{usuario.id}}</td>
                    <td>@{{usuario.name}}</td>
                    <td>@{{usuario.email}}</td>
                    
                    <td>
                      
                    </td>
                </tr>
            </tbody>
        </table>
        <div id="app9">
          @{{ message }}
        </div>
        <div id="app-2">
          <span v-bind:title="message">
            Hover your mouse over me for a few seconds
            to see my dynamically bound title!
          </span>
        </div>
       
@endsection

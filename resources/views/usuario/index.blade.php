@extends('layouts/admin')
@include('alerts.success')

@section('content')
        <table class="table table-sm table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Operaciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    
                    <td>
                      {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div id="app">
          @{{ message }}
        </div>
        <div id="app-2">
          <span v-bind:title="message">
            Hover your mouse over me for a few seconds
            to see my dynamically bound title!
          </span>
        </div>
        {!!$users->render()!!}
@endsection

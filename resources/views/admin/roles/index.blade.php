@extends('adminlte::page')

@section('title', 'TIC Academy')

@section('content_header')
    <h1>Lista de roles</h1>
@stop

@section('content')

@if (session('info'))

<div class="alert alert-primary" role="alert">
    <strong>Éxito!</strong> {{session('info')}}
</div>
    
@endif

    <div class="card">
        <div class="card-header">

            <a href="{{route('admin.roles.create')}}">Crear curso</a>

        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                    <tbody>
                        @forelse ($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>

                            <td widch="10px">
                                <a class="btn tbn-secondary" href="{{route('admin.roles.edit', $role)}}">Editar</a>
                            </td widch="10px">
                            <td>
                                <form action="{{route('admin.roles.destroy',$role)}}" method="POST">
                                @method('delete')
                                @csrf

                                <button class="btn btn-danger" type="submit">Eliminar</button>
                                
                                </form>
                            </td>
                        </tr>
                            
                        @empty

                        <tr>
                            <td colspan="4">No hay ningún rol registrado</td>
                        </tr>
                            
                        @endforelse
                    </tbody>
                </thead>
            </table>

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
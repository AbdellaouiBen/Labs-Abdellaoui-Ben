@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark"> Role</h1>
@stop

@section('content')

    <div class="container">
        <h1 class="text-center">Roles</h1>
        <a href="{{route('role.create')}}">
            <button class="btn btn-success d-block mx-auto">Ajouter un Role</button>
        </a>
        <table class="table">
            <thead>
              <tr  class="row bg-danger text-white">
                <th class="col">Id</th>
                <th class="col">role</th>
                <th class="col">Action</th>
              </tr>    
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr class="row">
                        <td class="col">{{$role->id}}</td>
                        <td class="col">{{$role->role}}</td>
                        <td class="col d-flex">
                            <a href="{{route('role.edit',$role)}}" class="btn btn-warning">edit</a>
                            <form action="{{route('role.destroy',$role)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr> 
                @endforeach
            </tbody>
          </table>  

    
@stop
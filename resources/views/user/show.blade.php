@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">User {{$user->name}}</h1>
@stop

@section('content')



<div class="container">
    <div class="mb-5 container">
        <div class="text-center">
                
            <h1 class=" shadow-lg p-3 mt-3 mb- bg-danger rounded">{{$user->name}} </h1>
        </div>
        <table class="table table-striped table-secondary">
            <thead class="bg-dark text-warning">
                <tr>
                    <th scope="col" class="text-center">Id</th>
                    <th scope="col" class="text-center">Nom</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="text-center">role</th>
                    <th scope="col" class="text-center">image</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>   
                    <th scope="row" class="text-center">{{$user->id}}</th>
                    <td class="text-center">{{$user->name}}</td>
                    <td class="text-center">{{$user->email}}</td>
                    <td class="text-center">
                        {{$user->role->role}}
                    </td>
                    <td class="text-center"><img class="w-25" src="{{asset('storage/'.$user->img)}}" alt=""></td>

                   
                    <td class="text-center ">  
                        {{-- @if ($user->role_id==1) --}}
                            {{-- <a class="btn btn-warning " href="{{route('editUser',$user->id)}}">edit</a>    --}}
                        {{-- @else  --}}
                            <a class="btn btn-warning mr-2" href="{{route('user.edit',$user->id)}}">edit</a>   
                            <a class="btn btn-danger ml-2" href="{{route('user.destroy',$user->id)}}">supprimer son compte</a>
                        {{-- @endif --}}
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>
@stop
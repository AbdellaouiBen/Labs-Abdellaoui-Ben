@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Users </h1>
@stop

@section('content')


        <div class="mb-5 container">
            <div class="text-center">

                <h1 class=" shadow-lg p-3 mt-3 mb- bg-danger rounded">Users </h1>
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
                    @foreach ($users as $user)
                    <tr>
                        <th scope="row" class="text-center">{{$user->id}}</th>
                        <td class="text-center">{{$user->name}}</td>
                        <td class="text-center">{{$user->email}}</td>
                        <td class="text-center">
                            {{$user->role->role}}
                        </td>
                        <td class="text-center"><img class="w-25" src="{{asset('storage/'.$user->img)}}" alt=""></td>
                      
                        
                        <td class="d-flex justify-content-around ">  
                            {{-- @can('editUser',$user ,App\user::class) --}}
                                <a class="btn btn-warning" href="{{route('user.edit',$user)}}">edit</a>   
                            {{-- @endcan --}}
                            {{-- @can('deleteUser',$user ,App\user::class) --}}
                            <form action="{{route('user.destroy',$user)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" href="">delete</button>

                            </form>
                            {{-- @endcan --}}
                            {{-- @can('isAdmin',App\user::class) --}}
                                <a class="btn btn-outline-primary" href="{{route('user.show',$user)}}">Show</a>
                            {{-- @endcan --}}
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
   
@stop
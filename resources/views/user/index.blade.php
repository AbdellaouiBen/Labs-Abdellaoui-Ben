@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="m-0 text-dark">Users </h1>
@stop

@section('content')


<div class="card-body">
    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
        <div class="row">
            <div class="col-sm-12 col-md-6"></div>
            <div class="col-sm-12 col-md-6"></div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid"
                    aria-describedby="example2_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Nom</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending">Email</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">role</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">image</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">description</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Action</th>
                            </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr role="row" class="odd">
                            <td tabindex="0" class="sorting_1">{{$user->name}} {{$user->firstname}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role->role}}</td>
                            <td><img class="w-25" src="{{asset('storage/'.$user->img)}}" alt=""></td>
                            <td>{{$user->description}}</td>
                            <td class="d-flex">
                                <a class="btn btn-warning" href="{{route('user.edit',$user)}}">edit</a> 
                                <form action="{{route('user.destroy',$user)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" href="">delete</button>
                                    <a class="btn btn-outline-primary" href="{{route('user.show',$user)}}">Show</a>
                                </form>  

                            </td>
                        </tr>
                        @endforeach

                        {{-- <tr role="row" class="even">
                            <td tabindex="0" class="sorting_1">Gecko</td>
                            <td>Firefox 1.5</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.8</td>
                            <td>A</td>
                        </tr> --}}

                    </tbody>
                    <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">Nom</th>
                            <th rowspan="1" colspan="1">Email</th>
                            <th rowspan="1" colspan="1">role</th>
                            <th rowspan="1" colspan="1">image</th>
                            <th rowspan="1" colspan="1">description</th>
                            <th rowspan="1" colspan="1">Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        </div>
    </div>
</div>

@stop

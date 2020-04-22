@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Newsletter </h1>
@stop

@section('content')


        <div class="mb-5 container">
            <div class="text-center">

                <h1 class=" shadow-lg p-3 mt-3 mb- bg-danger rounded">Inscrits à la newsletter </h1>
            </div>
            <table class="table table-striped table-secondary">
                <thead class="bg-dark text-warning">
                    <tr>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($newsletters as $newsletter)
                    <tr>
                        <td class="text-center">{{$newsletter->email}}</td>
                        <td class="d-flex justify-content-around ">  

                            <form action="{{route('newsletter.destroy',$newsletter)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" href="">delete</button>
                            </form>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
   
@stop
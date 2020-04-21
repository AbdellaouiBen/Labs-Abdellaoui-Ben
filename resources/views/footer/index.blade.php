@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Section footer</h1>
@stop

@section('content')

 


<div class="container">
    <div class="mb-5 container">
        <div class="text-center">
                
            <h1 class=" shadow-lg p-3 mt-3 mb- bg-danger rounded">Section footer </h1>
        </div>
        <table class="table table-striped table-secondary">
            {{-- <thead class="bg-dark text-warning">
                <tr>
                    <th scope="col" class="text-center">Id</th>
                    <th scope="col" class="text-center">Nom</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="text-center">role</th>
                    <th scope="col" class="text-center">image</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead> --}}
            <tbody>
                  
                <tr> 
                    <th scope="col" class="text-center border border-dark">text</th>
                    <td class="text-center border border-dark">{{$footer->text}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">text_link</th>
                    <td class="text-center border border-dark">{{$footer->text_link}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">link</th>
                    <td class="text-center border border-dark"> <a href="{{$footer->link}}">{{$footer->link}}</a></td>
                </tr>
 
                <tr> 
                    <th scope="col" class="text-center border border-dark">Action</th>

                    <td class="text-center border border-dark ">  
                            <a class="btn btn-warning " href="{{route('footer.edit',$footer)}}">edit</a>   
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div> 
@stop

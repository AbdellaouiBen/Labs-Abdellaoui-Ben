@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Section contact</h1>
@stop

@section('content')

 


<div class="container">
    <div class="mb-5 container">
        <div class="text-center">
                
            <h1 class="text-white shadow-lg p-3 mt-3 mb- bg-danger rounded">Section Contact </h1>
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
                    <th scope="col" class="text-center border border-dark">titre</th>
                    <td scope="row" class="text-center border border-dark">{{$contact->titre}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">text</th>
                    <td class="text-center border border-dark"><p class="text-break">{{$contact->text}}</p></td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">sous_titre</th>
                    <td class="text-center border border-dark">{{$contact->sous_titre}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">adress_un</th>
                    <td class="text-center border border-dark"> {{$contact->adress_un}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">adress_deux</th>
                    <td class="text-center border border-dark"> {{$contact->adress_deux}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">tel</th>
                    <td class="text-center border border-dark"> {{$contact->tel}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">email</th>
                    <td class="text-center border border-dark"> {{$contact->email}}</td>
                </tr>
 
                <tr> 
                    <th scope="col" class="text-center border border-dark">Action</th>

                    <td class="text-center border border-dark ">  
                            <a class="btn btn-warning " href="{{route('contact.edit',$contact)}}">edit</a>   
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div> 
@stop

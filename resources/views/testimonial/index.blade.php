@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark"> Testimonials</h1>
@stop

@section('content')

    <div class="container">
        <h1 class="text-center">Testimonials</h1>
        <a href="{{route('testimonial.create')}}">
            <button class="btn btn-success d-block mx-auto">Ajouter un testimonial</button>
        </a>
        <table class="table">
            <thead>
              <tr  class="row bg-danger text-white">
                <th class="col">Full name</th>
                <th class="col">image</th>
                <th class="col">function</th>
                <th class="col">companie</th>
                <th class="col">text</th>
                <th class="col">Action</th>
              </tr>    
            </thead>
            <tbody>
                @foreach ($testimonials as $testimonial)
                
                    <tr class="row">
                        <td class="col">{{$testimonial->full_name}}</td>
                        <td class="col"><img class="img-fluid" src="{{'storage/'.$testimonial->img}}" alt=""></td>
                        <td class="col">{{$testimonial->role}}</td>
                        <td class="col">{{$testimonial->company}}</td>
                        <td class="col">{{$testimonial->text}}</td>
                        <td class="col text-center">
                            <a href="{{route('testimonial.edit',$testimonial)}}" class="btn btn-warning">edit</a>
                            <form action="{{route('testimonial.destroy',$testimonial)}}" method="post">
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
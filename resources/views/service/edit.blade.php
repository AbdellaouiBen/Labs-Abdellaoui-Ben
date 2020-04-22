@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Editer un service</h1>
@stop

@section('content')



    <h1 class="mt-5 text-center bg-danger text-white ">edit service</h1>

    <form action="{{route('service.update',$service)}}" method="POST" >
        @method('PUT')
        @csrf
        <div class="text-center form-group container">    

            <div class="form-group">
                <label class="d-block input-group-text" for="icon">icon</label>
           
                    <div class="d-flex row modImg">
                        @foreach ($icons as $item)
                        <div class="form-check col-3 my-2 d-flex align-items-center justify-content-between  flex-column-reverse">
    
                            <input class="" class=" " type="radio" name="icon" id="icon"
                            value="{{$item->icon}}" @if($item->icon==$service->icon) checked @endif>
                            <i  style="font-size: 40px" class="{{$item->icon}} my-2"></i>
    
                        </div>
                        @endforeach
                    </div>
                @error('icon')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> 

            <div class="form-group">
                <label class="d-block input-group-text" for="titre">titre</label>
                <input class="form-control" type="text" name='titre' value="{{old('titre',$service->titre)}}">
                @error('titre')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> 

            <div class="form-group">
                <label class="d-block input-group-text" for="description">description</label>
                <input class="form-control" type="text" name='description' value="{{old('description',$service->description)}}">
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> 



            <input type="submit" value="soumettre">
        </div> 
    </form>
    
@stop
@section('css')
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
@endsection
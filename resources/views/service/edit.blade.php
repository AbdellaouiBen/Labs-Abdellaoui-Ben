@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')

<div class="d-flex justify-content-center mt-3">
    <div class="card card-primary w-75 ">
        <div class="card-header">
          <h3 class="card-title">Modifier le service "{{$service->titre}}"</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('service.update',$service)}}" method="post" >
            @csrf
            @method('PUT')
          <div class="card-body">
            <div class="form-group">
                <label for="titre">Titre</label>
                <input name="titre" type="text" class="form-control @error('titre') is-invalid @enderror" id="titre" value="{{ old('titre',$service->titre) }}" placeholder="titre">
                @error('titre')
                <span class="invalid-feedback" titre="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="service">Icon</label>
                <div class="d-flex row modImg">
                    @foreach ($icons as $item)
                    <div class="form-check col-3 my-2 d-flex align-items-center justify-content-between  flex-column-reverse">

                        <input type="radio" name="icon" id="icon"
                        value="{{$item->icon}}" @if($item->icon==$service->icon) checked @endif>
                        <i  style="font-size: 40px" class="{{$item->icon}} my-2"></i>

                    </div>
                    @endforeach
                </div>
                @error('service')
                <span class="invalid-feedback" service="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input name="description" type="text" class="form-control @error('description') is-invalid @enderror" id="description" value="{{ old('description',$service->description) }}" placeholder="Description">
                @error('description')
                <span class="invalid-feedback" description="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>







        </div>
    
    
          <!-- /.card-body -->
    
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Envoyer</button>
            <a href="{{route('service.index')}}" class="btn btn-danger">Annuler</a>
          </div>
        </form>
      </div>
    </div>















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
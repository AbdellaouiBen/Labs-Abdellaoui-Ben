@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')


<div class="d-flex justify-content-center mt-3">
    <div class="card card-primary w-75 ">
        <div class="card-header">
          <h3 class="card-title">Ajouter un nouveau service </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('service.store')}}" method="post" >
            @csrf
          <div class="card-body">
            <div class="form-group">
                <label for="titre">Titre</label>
                <input name="titre" type="text" class="form-control @error('titre') is-invalid @enderror" id="titre" value="@if($errors->first('titre'))@else{{ old('titre') }}@endif" placeholder="Titre">
                @error('titre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="role">Icon</label>
                <div class="d-flex row modImg">
                    @foreach ($icons as $item)
                    <div class="form-check col-3 my-2 d-flex align-items-center justify-content-between  flex-column-reverse">

                        <input  type="radio" name="icon" id="icon"
                        value="{{$item->icon}}">
                        <i  style="font-size: 40px" class="{{$item->icon}} my-2"></i>

                    </div>
                    @endforeach
                </div>
                @error('icon')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">description</label>
                <input name="description" type="text" class="form-control @error('description') is-invalid @enderror" id="description" value="@if($errors->first('description'))@else{{ old('description') }}@endif" placeholder="Description">
                @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    
    
          <!-- /.card-body -->
    
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a href="{{route('role.index')}}" class="btn btn-danger">Annuler</a>
          </div>
        </form>
      </div>
    </div>

    
    
@stop 

@section('css')
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/color-plus.css')}}">
@endsection
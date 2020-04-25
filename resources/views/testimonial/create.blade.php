@extends('adminlte::page')

@section('title', 'Ajouter un testimonial')

@section('content_header')
@stop

@section('content')


<div class="d-flex justify-content-center mt-3">
    <div class="card card-primary w-75 ">
        <div class="card-header">
          <h3 class="card-title">Ajouter un testimonial </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('testimonial.store')}}" method="post" enctype="multipart/form-data"  >
            @csrf
          <div class="card-body">
            <div class="form-group">
                <label for="full_name">Nom complet du client</label>
                <input name="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" id="full_name" value="@if($errors->first('full_name'))@else{{ old('full_name') }}@endif" placeholder="Nom complet">
                @error('full_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="img">Photo du client</label>
                <input name="img" type="file" class="form-control @error('img') is-invalid @enderror" id="img" >
                @error('img')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="role">Fonction du client</label>
                <input name="role" type="text" class="form-control @error('role') is-invalid @enderror" id="role" value="@if($errors->first('role'))@else{{ old('role') }}@endif" placeholder="Fonction du client">
                @error('role')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="company">Nom de la companie</label>
                <input name="company" type="text" class="form-control @error('company') is-invalid @enderror" id="company" value="@if($errors->first('company'))@else{{ old('company') }}@endif" placeholder="Companie">
                @error('company')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="text">Message</label>
                <textarea placeholder="Message" name="text"  class="form-control @error('text') is-invalid @enderror" id="text" cols="30" rows="10">@if($errors->first('text'))@else{{ old('text') }}@endif</textarea>
                @error('text')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>



        </div>
    
    
          <!-- /.card-body -->
    
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Envoyer</button>
            <a href="{{route('testimonial.index')}}" class="btn btn-danger">Annuler</a>
          </div>
        </form>
      </div>
    </div>

    
@stop 

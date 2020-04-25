@extends('adminlte::page')

@section('title', 'Modifier un testimonial')

@section('content_header')
@stop

@section('content')

<div class="d-flex justify-content-center mt-3">
    <div class="card card-primary w-75 ">
        <div class="card-header">
          <h3 class="card-title">Modifier un testimonial</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('testimonial.update',$testimonial)}}" method="post" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
          <div class="card-body">
            <div class="form-group">
                <label for="full_name">Nom complet du client</label>
                <input name="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" id="full_name" value="{{ old('full_name',$testimonial->full_name) }}" placeholder="Nom complet du client">
                @error('full_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="form-group">
                <label for="img">Photo du client</label>
                <input name="img" type="file" class="form-control @error('img') is-invalid @enderror" id="img" placeholder="Photo du client">
                @error('img')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="role">Fonction du client</label>
                <input name="role" type="text" class="form-control @error('role') is-invalid @enderror" id="role" value="{{ old('role',$testimonial->role) }}" placeholder="Fonction du client">
                @error('role')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="company">Nom de la companie</label>
                <input name="company" type="text" class="form-control @error('company') is-invalid @enderror" id="company" value="{{ old('company',$testimonial->company) }}" placeholder="Nom de la companie">
                @error('company')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="text">Message</label>
                <textarea name="text" placeholder="Message" id="text" class="form-control @error('text') is-invalid @enderror"   cols="30" rows="10">{{ old('text',$testimonial->text) }}</textarea>
                @error('text')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    
    
          <!-- /.card-body -->
    
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Modifier</button>
            <a href="{{route('testimonial.index')}}" class="btn btn-danger">Annuler</a>
          </div>
        </form>
      </div>
    </div>


@stop
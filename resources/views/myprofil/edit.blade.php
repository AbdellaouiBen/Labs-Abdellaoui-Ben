@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')

 
<div class="d-flex justify-content-center">
<div class="card card-primary w-75 ">
    <div class="card-header">
      <h3 class="card-title">Mofifier mon profil</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('myprofil.update',Auth::user())}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
            <label for="name">Nom</label>
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name',$user->name) }}" placeholder="Nom">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="firstname">Prenom (facultatif)</label>
            <input name="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname" value="{{ old('firstname',$user->firstname) }}" placeholder="Prénom">
            @error('firstname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email',$user->email) }}" placeholder="Email">
          @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>


        <div class="form-group">
          <label for="img">Photo de profil</label>
          <input name="img" type="file" class="form-control @error('img') is-invalid @enderror" id="img" >
        @error('img')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

        <div class="form-group">
            <label>Bio (facultatif)</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="Enter ...">{{ old('description',$user->description) }}</textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Envoyer</button>
        <a href="{{route('myprofil.index')}}" class="btn btn-danger">Annuler</a>
      </div>
    </form>
  </div>
</div>






@stop
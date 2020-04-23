@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
        
<div class="d-flex justify-content-center mt-3">
    <div class="card card-primary w-75 ">
        <div class="card-header">
          <h3 class="card-title">Modifier l'utilisateur "{{$user->name}}"</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('user.update',$user)}}" method="post" enctype="multipart/form-data">
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
                <label  for="role_id">Role</label>
                <select class="form-control" name="role_id" id="role_id">
                    @foreach ($roles as $role)
                        @if ($role->id!=1 )
                            @if ($role->id===$user->role_id)
                                <option selected value="{{$role->id}}">{{$role->role}}</option>
                            @else
                                <option value="{{$role->id}}">{{$role->role}}</option>
                            @endif
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="form-group">
              <label for="img">File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input name="img" type="file" class="custom-file-input  @error('img') is-invalid @enderror" id="img">
                  <label class="custom-file-label" for="img">Choisir une image</label>
                </div>
            </div>
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
            <a href="{{route('user.index')}}" class="btn btn-danger">Annuler</a>
          </div>
        </form>
      </div>
    </div>
    
    
    
@endsection
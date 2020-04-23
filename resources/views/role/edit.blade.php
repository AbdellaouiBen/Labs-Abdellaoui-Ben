@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')

<div class="d-flex justify-content-center mt-3">
    <div class="card card-primary w-75 ">
        <div class="card-header">
          <h3 class="card-title">Modifier le role "{{$role->role}}"</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('role.update',$role)}}" method="post" >
            @csrf
            @method('PUT')
          <div class="card-body">
            <div class="form-group">
                <label for="role">Role</label>
                <input name="role" type="text" class="form-control @error('role') is-invalid @enderror" id="role" value="{{ old('role',$role->role) }}" placeholder="Role">
                @error('role')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    
    
          <!-- /.card-body -->
    
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Envoyer</button>
            <a href="{{route('role.index')}}" class="btn btn-danger">Annuler</a>
          </div>
        </form>
      </div>
    </div>
@stop
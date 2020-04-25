@extends('adminlte::page')

@section('title', 'Modifier la citation')

@section('content_header')
@stop

@section('content')



<div class="container">


    
<div class="d-flex justify-content-center mt-3">
    <div class="card card-primary w-75 ">
        <div class="card-header">
          <h3 class="card-title">Modifier la citation</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('quote.update',$quote)}}" method="post" >
            @csrf
            @method('PUT')
          <div class="card-body">
            <div class="form-group">
                <label for="quote">Citation</label>
                <input name="quote" type="text" class="form-control @error('quote') is-invalid @enderror" id="quote" value="{{ old('quote',$quote->quote) }}" placeholder="quote">
                @error('quote')
                <span class="invalid-feedback" quote="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    
    
          <!-- /.card-body -->
    
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Envoyer</button>
            <a href="{{route('quote.index')}}" class="btn btn-danger">Annuler</a>
          </div>
        </form>
      </div>
    </div>


@stop
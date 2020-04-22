@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Edit quote</h1>
@stop

@section('content')



<div class="container">
    <h1 class="mt-5 text-center bg-danger text-white ">edit quote</h1>

    <form action="{{route('quote.update',$quote)}}" method="POST"  >
        @method('PUT')
        @csrf
        <div class="text-center form-group container">    

            <div class="form-group">
                <textarea name="quote" id="quote" cols="30" rows="10">{{ old('quote',$quote->quote) }}</textarea>
                @error('quote')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <a class="btn btn-primary" href="{{route('quote.index')}}">Annuler</a> 
            <input class="btn btn-warning" type="submit" value="edit">
        </div> 
    </form>
</div> 
@stop
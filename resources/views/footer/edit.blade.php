@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">editer section "footer"</h1>
@stop

@section('content')

        <div class="container">
            <div class="text-center">
                <h1 class=" shadow-lg p-3 mb-5 bg-danger rounded">editer section "footer"</h1>
            </div>

            <div class="card-body">

            <form action="{{route('footer.update',$footer)}}" method="post" >
                @method('PUT')
                @csrf
          
                <div class="form-group row">
                    <label for="text" class="col-md-4 col-form-label text-md-right ">{{ __('text') }}</label>
                    <div class="col-md-6">
                        <input id="text" type="text" class="form-control @error('text') is-invalid @enderror" name="text" value="{{ old('text',$footer->text) }}" >
                        @error('text')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="text_link" class="col-md-4 col-form-label text-md-right ">{{ __('text_link') }}</label>
                    <div class="col-md-6">
                        <input id="text_link" type="text" class="form-control @error('text_link') is-invalid @enderror" name="text_link" value="{{ old('text_link',$footer->text_link) }}" >
                        @error('text_link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="link" class="col-md-4 col-form-label text-md-right ">{{ __('link') }}</label>
                    <div class="col-md-6">
                        <input id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link',$footer->link) }}" >
                        @error('link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
       
      

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                    <a href="{{route('footer.index')}}" class="btn btn-primary">ANNULER</a>
                </div>
               
            </form>

            </div>
        </div>
       

    
@stop
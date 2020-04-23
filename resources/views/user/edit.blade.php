@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">edit user</h1>
@stop

@section('content')

        <div class="container">
            <div class="text-center">
                <h1 class=" shadow-lg p-3 mb-5 bg-danger rounded">edit user</h1>
            </div>
            <div class="card-body">
            <form action="{{route('user.update',$user)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label  text-md-right">{{ __('Name') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',$user->name) }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>  
                </div>   
           
                <div class="form-group row">
                    <label for="firstname" class="col-md-4 col-form-label  text-md-right">{{ __('Firstname(facultatif)') }}</label>
                    <div class="col-md-6">
                        <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname',$user->firstname) }}"  autocomplete="firstname" autofocus>
                        @error('firstname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>  
                </div>   
                
                
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label  text-md-right">{{ __('E-Mail Address') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email',$user->email) }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> 
                        @enderror
                    </div> 
                </div>  
                
                <div class="form-group row">
                    <label for="role_id" class="col-md-4 col-form-label  text-md-right">{{ __('role') }}</label>
                    <div class="col-md-6">
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
                            </div>
                            
                            <div class="form-group row">
                                <label for="img" class="col-md-4 col-form-label  text-md-right">{{ __('img') }}</label>
                                <div class="col-md-6">
                                    <input id="img" type="file" class="@error('img') is-invalid @enderror" name="img"  >
                                    @error('img')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> 
                                    @enderror
                                </div> 
                            </div>  
                            
                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label  text-md-right">{{ __('description(facultatif)') }}</label>
                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description',$user->description) }}"  autofocus>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>  
                            </div>   
                

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                    <a href="{{route('user.index')}}" class="btn btn-primary">ANNULER</a>

                </div>
               
            </form>

            </div>
        </div>
    
@endsection
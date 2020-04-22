@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Ajouter une nouvelle icon</h1>
@stop

@section('content')

 
    <h1 class="mt-5 text-center bg-danger text-white "><u>Ajouter une icon</u> </h1>

    <form action="{{route('service.store')}}" method="POST" >
        @csrf
    
        <div class="text-center form-group container">    
            {{-- <div class="form-group">
                <label class="d-block input-group-text" for="icon">icon</label> 
                <select  name="icon"  >
                    @php
                        $icons = [
                            ['code'=> 'f116','class'=>'fa fa-shopping-bag'],
                            ['code'=> 'f080','class'=>"fa fa-bar-chart"],
                            ['code'=> 'f1d8','class'=>"fa fa-paper-plane"],
                            ['code'=> 'f03e','class'=>"far fa-image"],
                            ['code'=> 'f018','class'=>"fas fa-road"]
                        ];
                        @endphp
                      
                    @foreach ($icons as $key => $value)
                        <option  value="{{$icons[$key]['class']}}"> &#x{{$icons[$key]['code']}}  </option>
                    @endforeach
                </select>     
                @error('icon')
                <div class="alert alert-danger">{{ $message }}</div> 
                @enderror   
            </div>              --}}
            <div class="form-group">
                <label class="d-block input-group-text" for="icon">icon</label> 

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
                <div class="alert alert-danger">{{ $message }}</div> 
                @enderror   
            </div> 


    
          
            {{-- <div class="form-group">
                <label class="d-block input-group-text" for="icon">icon</label> 
                <input class="form-control" placeholder="icon" type="text " name='icon' value="@if($errors->first('icon'))@else{{ old('icon') }}@endif">      
                @error('icon')
                <div class="alert alert-danger">{{ $message }}</div> 
                @enderror   
            </div>              --}}

            <div class="form-group">
                <label class="d-block input-group-text" for="titre">titre</label> 
                <input class="form-control" placeholder="titre" type="text " name='titre' value="@if($errors->first('titre'))@else{{ old('titre') }}@endif">      
                @error('titre')
                <div class="alert alert-danger">{{ $message }}</div> 
                @enderror   
            </div>             

            <div class="form-group">
                <label class="d-block input-group-text" for="description">description</label> 
                <input class="form-control" placeholder="description" type="text " name='description' value="@if($errors->first('description'))@else{{ old('description') }}@endif">      
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div> 
                @enderror   
            </div>             
                
            <input type="submit" value="ajouter">
        </div>
    </form> 
    
    
@stop 

@section('css')
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
@endsection
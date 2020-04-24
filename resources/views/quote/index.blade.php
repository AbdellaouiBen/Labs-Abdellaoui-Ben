@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">quote</h1>
@stop

@section('content')


          
<table class="table table-striped table-dark">
  <thead>
    <tr >
      <th scope="col">Quote</th>
      <th class="text-center" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
          
      <tr>
     
          <td>{{$quote->quote}}</td>
          <td>              
              <div class="text-center mb-2">
                  <a  class="  btn btn-warning rounded-circle " href="{{route('quote.edit',$quote)}}"><i class="fas fa-pencil-alt"></i></a> 
              </div>
          </td>
      </tr>

  </tbody>
</table> 
    
@stop

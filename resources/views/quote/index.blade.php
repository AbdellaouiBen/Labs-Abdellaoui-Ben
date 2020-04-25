@extends('adminlte::page')

@section('title', 'Quote')

@section('content_header')
@stop

@section('content')


          
<table class="table table-striped table-dark">
  <thead>
    <tr class="text-center">
        <th colspan="2" class="">
            <h1><span class="text-black font-weight-bold bg-teal px-2 rounded">Quote</span>  </h1> 
        </th>
    </tr>
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

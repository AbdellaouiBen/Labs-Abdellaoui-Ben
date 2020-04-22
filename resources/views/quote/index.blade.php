@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">quote</h1>
@stop

@section('content')

    <div class="container">
        <h1 class="text-center">Quote</h1>

        <table class="table">
            <thead>
              <tr  class="row bg-danger text-white">
                <th class="col-9">Quote</th>
                <th class="col-3">Action</th>
              </tr>    
            </thead>
            <tbody>
                    <tr class="row">
                        <td class="col-9">{{$quote->quote}}</td>
                        <td class="col-3">
                            <a href="{{route('quote.edit',$quote)}}" class="btn btn-warning">edit</a>
                        </td>
                    </tr> 
            </tbody>
          </table>  

    
@stop
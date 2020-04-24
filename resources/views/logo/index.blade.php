@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Logo</h1>
@stop

@section('content')

          <table class="table table-striped table-dark">
            <thead>
              <tr >
      
                <th scope="col">Logo</th>
                <th class="text-center" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <th><img src="{{'storage/'.$logo->logo}}" alt=""> </th>
                    <td>              
                        <div class="text-center">
                          <a  class="  btn btn-warning rounded-circle " href="{{route('logo.edit',$logo)}}"><i class="fas fa-pencil-alt"></i></a> 
                        </div>
                    </td>
                </tr>
            </tbody>
          </table>
@stop

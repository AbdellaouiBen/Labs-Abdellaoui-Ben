@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')

          <table class="table table-striped table-dark">
            <thead>
              <tr class="text-center">
                <th colspan="6" class="">
                    <h1><span class="text-black font-weight-bold bg-teal px-2 rounded">Logo </span> </h1> 
                </th>
            </tr>
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

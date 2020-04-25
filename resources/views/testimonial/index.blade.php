@extends('adminlte::page')

@section('title', 'Testimonials')

@section('content_header')
@stop

@section('content')




          <table class="table table-striped table-dark">
            <thead>
                <tr class="text-center">
                    <th colspan="6" class="">
                        <h1><span class="text-black font-weight-bold bg-teal px-2 rounded">Testimonials</span>  </h1> 
                        <a href="{{route('testimonial.create')}}"><i class="fas fa-plus-square fa-2x text-success"></i></a>
                    </th>
                </tr>
              <tr >
                <th scope="col">Nom complet du partenaire</th>
                <th scope="col">Phot du partenaire</th>
                <th scope="col">Function du partenaire</th>
                <th scope="col">Companie du partenaire</th>
                <th scope="col">Commentaire du partenaire</th>
                <th class="text-center" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($testimonials as $testimonial)
                    
                <tr>
                    <th>{{$testimonial->full_name}}</th>
                    <td><img class="img-fluid" src="{{'storage/'.$testimonial->img}}" alt=""></td>
                    <td>{{$testimonial->role}}</td>
                    <td>{{$testimonial->company}}</td>
                    <td>{{$testimonial->text}}</td>
                    <td>              
                        <div class="text-center mb-2">
                            <a  class="  btn btn-warning rounded-circle " href="{{route('testimonial.edit',$testimonial)}}"><i class="fas fa-pencil-alt"></i></a> 
                        </div>
                        <div class="text-center">
                            <a class="   rounded-circle btn btn-danger "  data-toggle="modal" data-target="#deletetestimonial{{$testimonial->id}}" href=""><i class="fas fa-trash-alt"></i></a>
                        </div>
                    
                    </td>
                </tr>
                        <div class="modal fade" id="deletetestimonial{{$testimonial->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog">
                            <div class="modal-content bg-danger">
                                <div class="modal-header ">
                                <h4 class="modal-title">Attention!!!</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                </div>
                                <div class="modal-body text-center">
                                <p>Vous êtes sur le point de supprimer le testimonial de la companie {{ucfirst($testimonial->company)}}! <br> Cette action n'est pas reversible!</p>
                                </div>
                                <div class="modal-footer float-right">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Annuler</button>
                                <form action="{{route('testimonial.destroy',$testimonial)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-light">Supprimer ce testimonial</button>
                                </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                @endforeach
          
            </tbody>
          </table>   





@stop

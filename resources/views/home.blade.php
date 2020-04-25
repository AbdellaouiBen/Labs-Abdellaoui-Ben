@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <p class="mb-0">You are logged in as {{ucfirst(Auth::user()->name)}} !</p>
            </div>
        </div>
    </div>
</div>
@can('adminWebmaser', App\User::class)


<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{count($users)}}</h3>

                <p>Utilisateurs</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="{{route('user.index')}}" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{count($forms)}}</h3>

                <p>Messages</p>
            </div>
            <div class="icon">
                <i class="fa fa-envelope"></i>
            </div>
            <a href="{{route('form.index')}}" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{count($commentaires)}}</h3>

                <p class="text-white">Commentaires</p>
            </div>
            <div class="icon">
                <i class="fas fa-comment-dots"></i>
            </div>
            <a href="{{route('commentaire.index')}}" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6"> 
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{count($newsletters)}}</h3>

                <p>Newsletters</p>
            </div>
            <div class="icon">
                <i class="far fa-newspaper"></i>
            </div>
            <a href="{{route('newsletter.index')}}" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>


<div class="row">
    <div class="col-6">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title ">Derniers membres</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body ">
                <ul class="users-list clearfix">

                    @foreach ($usersss as $user)
                    <li>
                        <img class="w-25" src="{{asset('storage/'.$user->img)}}" alt="User Image">
                        <a class="users-list-name" href="{{route('user.show',$user)}}">{{$user->name}}
                            {{$user->firstname}}</a>
                        <span class="users-list-date">{{$user->created_at->format('d-m-Y')}}</span>
                    </li>
                    @endforeach
                </ul>
                <!-- /.users-list -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
                <a class="text-dark" href="{{route('user.index')}}">Voir tout les utilisateurs</a>
            </div>
            <!-- /.card-footer -->
        </div>
    </div>




    <div class="col-6">
        <div class="card card-purple">
            <div class="card-header ui-sortable-handle">
                <h3 class="card-title">
                    <a href="{{route('article.index')}}">Derniers articles</a>
                </h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <ul class="todo-list ui-sortable" data-widget="todo-list">
                    @foreach ($articles as $article)

                    <li>
                        <!-- drag handle -->
                        <span class="">
                            <a class="text-dark" href="{{route('article.show',$article)}}">
                                <i class="fas fa-newspaper"> </i>
                                {{-- <i class="fas fa-ellipsis-v"></i> --}}
                            </a>
                        </span>
                        <!-- checkbox -->

                        <!-- todo text -->
                        <a class="text-dark" href="{{route('article.show',$article)}}">
                            <span class=""> {{$article->titre}}</span>
                        </a>
                        <!-- Emphasis label -->
                        <small
                            class="float-right badge  @if ($article->accepted) badge-success @else badge-danger @endif "><i
                                class="far fa-clock"></i> {{$article->created_at->diffForHumans()}}</small>
                        <!-- General tools such as edit or delete-->

                    </li>
                    @endforeach


                </ul>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix row">
                <div class="col-6">

                    <span class="pagination-sm  d-inline">
                        {{$articles->links()}}
                    </span>
                </div>
                <div class="col-6">
                    
                    <a href="{{route('article.create')}}" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add
                        item</a>
                </div>
            </div>
        </div>
    </div> 



</div>





  

@endcan

 

<div class="card bg-gradient-teal" style="position: relative; left: 0px; top: 0px;">
    <div class="card-header border-0 ui-sortable-handle">

        <h3 class="card-title">
            <i class="far fa-calendar-alt"></i>
            Calendrier
        </h3>     
        <!-- tools card -->
        <div class="card-tools">
            <!-- button with a dropdown -->

            <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <!-- /. tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body pt-0">
        <!--The calendar -->
        <div id="calendar" style="width: 100%">
            <div class="bootstrap-datetimepicker-widget usetwentyfour">
                <ul class="list-unstyled">
                    <li class="show">
                        <div class="datepicker">
                            <div class="datepicker-days" style="">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th class="picker-switch" data-action="pickerSwitch" colspan="5"
                                                title="BIENTOT LA FIN DU CONFINNEMENT">{{Carbon\Carbon::now()->format('F')}} {{Carbon\Carbon::now()->format('Y')}}</th>
                                     
                                        </tr>
                                        <tr>
                                            <th class="dow">Su</th>
                                            <th class="dow">Mo</th>
                                            <th class="dow">Tu</th>
                                            <th class="dow">We</th>
                                            <th class="dow">Th</th>
                                            <th class="dow">Fr</th>
                                            <th class="dow">Sa</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        <tr>
                                            <td data-action="selectDay" data-day="03/29/2020" class="day old weekend">29
                                            </td>
                                            <td data-action="selectDay" data-day="03/30/2020" class="day old">30</td>
                                            <td data-action="selectDay" data-day="03/31/2020" class="day old">31</td>
                                            <td data-action="selectDay" data-day="04/01/2020" class="day">1</td>
                                            <td data-action="selectDay" data-day="04/02/2020" class="day">2</td>
                                            <td data-action="selectDay" data-day="04/03/2020" class="day">3</td>
                                            <td data-action="selectDay" data-day="04/04/2020" class="day weekend">4</td>
                                        </tr>
                                        <tr>
                                            <td data-action="selectDay" data-day="04/05/2020" class="day weekend">5</td>
                                            <td data-action="selectDay" data-day="04/06/2020" class="day">6</td>
                                            <td data-action="selectDay" data-day="04/07/2020" class="day">7</td>
                                            <td data-action="selectDay" data-day="04/08/2020" class="day">8</td>
                                            <td data-action="selectDay" data-day="04/09/2020" class="day">9</td>
                                            <td data-action="selectDay" data-day="04/10/2020" class="day">10</td>
                                            <td data-action="selectDay" data-day="04/11/2020" class="day weekend">11
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-action="selectDay" data-day="04/12/2020" class="day weekend">12
                                            </td>
                                            <td data-action="selectDay" data-day="04/13/2020" class="day">13</td>
                                            <td data-action="selectDay" data-day="04/14/2020" class="day">14</td>
                                            <td data-action="selectDay" data-day="04/15/2020" class="day">15</td>
                                            <td data-action="selectDay" data-day="04/16/2020" class="day">16</td>
                                            <td data-action="selectDay" data-day="04/17/2020" class="day">17</td>
                                            <td data-action="selectDay" data-day="04/18/2020" class="day weekend">18
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-action="selectDay" data-day="04/19/2020" class="day weekend">19
                                            </td>
                                            <td data-action="selectDay" data-day="04/20/2020" class="day">20</td>
                                            <td data-action="selectDay" data-day="04/21/2020" class="day">21</td>
                                            <td data-action="selectDay" data-day="04/22/2020" class="day">22</td>
                                            <td data-action="selectDay" data-day="04/23/2020" class="day">23</td>
                                            <td data-action="selectDay" data-day="04/24/2020" class="day">24</td>
                                            <td data-action="selectDay" data-day="04/25/2020"
                                                class="day ">25</td>
                                        </tr>
                                        <tr>
                                            <td data-action="selectDay" data-day="04/26/2020" class="day weekend">26
                                            </td>
                                            <td data-action="selectDay" data-day="04/27/2020" class="day active today weekend">27</td>
                                            <td data-action="selectDay" data-day="04/28/2020" class="day">28</td>
                                            <td data-action="selectDay" data-day="04/29/2020" class="day">29</td>
                                            <td data-action="selectDay" data-day="04/30/2020" class="day">30</td>
                                            <td data-action="selectDay" data-day="05/01/2020" class="day new">1</td>
                                            <td data-action="selectDay" data-day="05/02/2020" class="day new weekend">2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-action="selectDay" data-day="05/03/2020" class="day new weekend">3
                                            </td>
                                            <td data-action="selectDay" data-day="05/04/2020" class="day new">4</td>
                                            <td data-action="selectDay" data-day="05/05/2020" class="day new">5</td>
                                            <td data-action="selectDay" data-day="05/06/2020" class="day new">6</td>
                                            <td data-action="selectDay" data-day="05/07/2020" class="day new">7</td>
                                            <td data-action="selectDay" data-day="05/08/2020" class="day new">8</td>
                                            <td data-action="selectDay" data-day="05/09/2020" class="day new weekend">9
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="datepicker-months" style="display: none;">
                                <table class="table-condensed">
                                    <thead>
                                        <tr>
                                            <th class="prev" data-action="previous"><span class="fa fa-chevron-left"
                                                    title="Previous Year"></span></th>
                                            <th class="picker-switch" data-action="pickerSwitch" colspan="5"
                                                title="Select Year">2020</th>
                                            <th class="next" data-action="next"><span class="fa fa-chevron-right"
                                                    title="Next Year"></span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="7"><span data-action="selectMonth"
                                                    class="month">Jan</span><span data-action="selectMonth"
                                                    class="month">Feb</span><span data-action="selectMonth"
                                                    class="month">Mar</span><span data-action="selectMonth"
                                                    class="month active">Apr</span><span data-action="selectMonth"
                                                    class="month">May</span><span data-action="selectMonth"
                                                    class="month">Jun</span><span data-action="selectMonth"
                                                    class="month">Jul</span><span data-action="selectMonth"
                                                    class="month">Aug</span><span data-action="selectMonth"
                                                    class="month">Sep</span><span data-action="selectMonth"
                                                    class="month">Oct</span><span data-action="selectMonth"
                                                    class="month">Nov</span><span data-action="selectMonth"
                                                    class="month">Dec</span></td>
                                        </tr>
                                    </tbody>
                                </table>  
                            </div>
                            <div class="datepicker-years" style="display: none;">
                                <table class="table-condensed">
                                    <thead>
                                        <tr>
                                            <th class="prev" data-action="previous"><span class="fa fa-chevron-left"
                                                    title="Previous Decade"></span></th>
                                            <th class="picker-switch" data-action="pickerSwitch" colspan="5"
                                                title="Select Decade">2020-2029</th>
                                            <th class="next" data-action="next"><span class="fa fa-chevron-right"
                                                    title="Next Decade"></span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="7"><span data-action="selectYear"
                                                    class="year old">2019</span><span data-action="selectYear"
                                                    class="year active">2020</span><span data-action="selectYear"
                                                    class="year">2021</span><span data-action="selectYear"
                                                    class="year">2022</span><span data-action="selectYear"
                                                    class="year">2023</span><span data-action="selectYear"
                                                    class="year">2024</span><span data-action="selectYear"
                                                    class="year">2025</span><span data-action="selectYear"
                                                    class="year">2026</span><span data-action="selectYear"
                                                    class="year">2027</span><span data-action="selectYear"
                                                    class="year">2028</span><span data-action="selectYear"
                                                    class="year">2029</span><span data-action="selectYear"
                                                    class="year old">2030</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="datepicker-decades" style="display: none;">
                                <table class="table-condensed">
                                    <thead>
                                        <tr>
                                            <th class="prev" data-action="previous"><span class="fa fa-chevron-left"
                                                    title="Previous Century"></span></th>
                                            <th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090
                                            </th>
                                            <th class="next" data-action="next"><span class="fa fa-chevron-right"
                                                    title="Next Century"></span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="7"><span data-action="selectDecade" class="decade old"
                                                    data-selection="2006">1990</span><span data-action="selectDecade"
                                                    class="decade" data-selection="2006">2000</span><span
                                                    data-action="selectDecade" class="decade active"
                                                    data-selection="2016">2010</span><span data-action="selectDecade"
                                                    class="decade" data-selection="2026">2020</span><span
                                                    data-action="selectDecade" class="decade"
                                                    data-selection="2036">2030</span><span data-action="selectDecade"
                                                    class="decade" data-selection="2046">2040</span><span
                                                    data-action="selectDecade" class="decade"
                                                    data-selection="2056">2050</span><span data-action="selectDecade"
                                                    class="decade" data-selection="2066">2060</span><span
                                                    data-action="selectDecade" class="decade"
                                                    data-selection="2076">2070</span><span data-action="selectDecade"
                                                    class="decade" data-selection="2086">2080</span><span
                                                    data-action="selectDecade" class="decade"
                                                    data-selection="2096">2090</span><span data-action="selectDecade"
                                                    class="decade old" data-selection="2106">2100</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </li>
                    <li class="picker-switch accordion-toggle"></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>




@stop
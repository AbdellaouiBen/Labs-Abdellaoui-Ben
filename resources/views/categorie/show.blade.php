@extends('layouts.master')

@section('content')
    @include('components.pageheader')
    <div class="page-section spad">
		<div class="container">
            <div class="row">
                @include('partials.articles')

                
                <!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">

                    
                    @include('components.search-form')
                    @include('components.categories')
                    @include('components.tags')
                    @include('components.quote')

			

                </div>
            </div>
		</div>
	</div>
	<!-- page section end-->

    
    @include('components.newsletter')
    @include('components.footer')
@endsection
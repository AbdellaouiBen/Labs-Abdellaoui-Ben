<!-- Testimonial section -->
<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                    <h2>{!! App\Helpers\ColorChanger::color(($independant->testimonials_titre))!!}</h2>
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    @foreach ($testimonials as $testimonial)
                        
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>{{$testimonial->text}}</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="{{asset('storage/'.$testimonial->img)}}" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>{{$testimonial->full_name}}</h2>
                                    <p>{{$testimonial->role}} {{$testimonial->company}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section end-->
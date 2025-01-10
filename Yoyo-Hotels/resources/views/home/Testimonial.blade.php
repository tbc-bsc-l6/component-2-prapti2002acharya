<section class="testimonial-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Testimonials</span>
                    <h2>What Customers Say?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="testimonial-slider owl-carousel">
                    <div class="ts-item">

                        @foreach($reviews as $review)

                        <h5 style="font-size: 30px">{{$review->name}}</h5>
                        <p style="font-size: 18px;">{{ $review->review }}</p>
                        <div class="ti-author">
                           
                            
                        </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
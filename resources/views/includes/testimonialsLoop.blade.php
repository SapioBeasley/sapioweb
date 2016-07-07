<!-- Item 1 -->
<div class="col-md-4 mb-sm-50">
    <div class="t-item wow fadeIn" data-wow-duration="1s">
        {{-- <img src="assets/images/avatar-1.png" alt="Testimonial"> --}}
        <blockquote>
            <p>{{$testimonial->content}}</p>
            <footer>
                <cite>by {{$testimonial->from}}
                    {{-- <span>Google</span> --}}
                </cite>
            </footer>
        </blockquote>
        <span class="et-quote t-icon"></span>
    </div><!-- / .t-item -->
</div><!-- / .col-md-4 -->

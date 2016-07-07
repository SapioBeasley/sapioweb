<!-- Item 1 -->
<div class="col-md-6 portfolio-item print">
    <div class="p-wrapper hover-default">
        <img src="{{url('assets/images/portfolio/' . $portfolio->id . '.jpg')}}" alt="Project Example">
        <div class="p-hover">
            <div class="p-content">
                <h4>{{$portfolio->title}}</h4>
                <h6 class="subheading">{{$portfolio->content}}</h6>
            </div>
        </div>
        <a href="http://{{$portfolio->content}}/" target="_blank" class="open-btn"><i class="fa fa-expand"></i></a>
    </div>
</div><!-- / .portfolio-item -->

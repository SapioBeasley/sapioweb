<!-- Item 1 -->
<div class="col-md-4 portfolio-item hover-side print">
  <figure>
    <img src="{{url('assets/images/portfolio/' . $portfolio->id . '.jpg')}}" alt="Project Example">
    <figcaption>
      <h5 class="hover-heading">{{$portfolio->title}}</h5>
      {{-- <p class="hover-text">Lorem ipsum dolor amet sed, consectetur at adipisicing.</p> --}}
      <a href="http://{{$portfolio->content}}/" class="hover-more-btn"><span class="linea-arrows-slim-right"></span></a>
      <ul class="hover-btns">
        <li><a href="{{url('assets/images/portfolio/' . $portfolio->id . '.jpg')}}" class="open-gallery"><span class="linea-arrows-expand"></span></a></li>
      </ul>
    </figcaption>
  </figure>
</div><!-- / .portfolio-item -->

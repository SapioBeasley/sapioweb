<!-- Blog Post 1 -->
<div class="col-lg-4 col-md-6 mb-sm-50 ws-s">
    <div class="blog-post">

        <!-- Image -->
        <a href="{{route('blog.single', $gist->id)}}" class="post-img">
            <img src="https://source.unsplash.com/random/991x714?nature={{rand(0,99)}}" alt="Blog Post 1">
        </a>

        <div class="bp-content">

            <!-- Meta data -->
            <div class="post-meta">
                <a href="{{route('blog.single', $gist->id)}}" class="post-date">
                    <i class="fa fa-calendar-o"></i>
                    <span>{{date("F W Y", strtotime($gist->created_at))}}</span>
                </a>
            </div><!-- / .meta -->

            <!-- Post Title -->
            <a href="{{route('blog.single', $gist->id)}}" class="post-title">
                <h4>{{strlen($gist->description) > 18 ? substr($gist->description,0,18)."..." : $gist->description}}</h4>
            </a>

            <!-- Blurb -->
            {{-- <p>
                {{$gist->owner->login}}
                <img src="{{$gist->owner->avatar_url}}"/>
    +"html_url": "https://github.com/SapioBeasley"
    +"repos_url": "https://api.github.com/users/SapioBeasley/repos"
                Lorem ipsum dolor sit amet, tempor consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad ...
            </p> --}}

            <!-- Link -->
            <a href="{{route('blog.single', $gist->id)}}" class="btn btn-small">Read More</a>

        </div><!-- / .bp-content -->

    </div><!-- / .blog-post -->
</div><!-- / .col-lg-4 -->

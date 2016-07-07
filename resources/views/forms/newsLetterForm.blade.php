{!!Form::open(['route' => 'newsletter.post', 'class' => 'subscribe-form'])!!}

    <!-- Email -->
    <input type="email" name="email" placeholder="Your email address" id="mc-email" class="wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s" >

    <!-- Send Button -->
    {!! Form::submit('Join Us', ['name' => 'subscribe', 'class' => 'btn btn-light btn-large wow fadeInUp mc-send-btn', 'data-wow-delay' => '.1s', 'data-wow-duration' => '1s']) !!}

    <!-- Info (uncomment this for extra info) -->
    <!-- <label for="mc-email" class="mc-info"></label> -->

    <!-- Ajax message -->
    <div class="subscribe-result"></div>

{!!Form::close()!!}

@extends('layouts.frontend')
@section('includes.main-nav')
@endsection

@section('main-content')


<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>Evenementen</h2>
                <a href="{{route('events.create')}}" class="tickets_btn">Add new event</a>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Event Area =================-->
<section class="event_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>Upcoming Events</h2>
        </div>
        <div class="row event_inner">
            @foreach ($events as $event)
            <a href="{{ route('events.detail', $event->id) }}">
                <div class="col-lg-3 col-sm-6">
                    <div class="event_item">
                        <div class="event_name">
                            <h4>{{$event->titel}}</h4>
                            <p>{{$event->datum}}</p>
            </a>
        </div>
        <div class="event_img">
            <img class="img-fluid" src="{{asset('images/emmure.jpg')}}" alt="">
        </div>

    </div>
    </div>
    @endforeach


    </div>
    </div>
</section>

<!--================End event Area =================-->
@endsection

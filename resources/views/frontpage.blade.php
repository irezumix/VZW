@extends('layouts.frontend')
@section('includes.main-nav')
@endsection

@section('main-content')






<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="banner_content">
                @auth
                <h4>Welcome {{Auth::user()->name}}</h4>
                @endauth
                <h2>Young Artists Promotion <br />vzw</h2>
                <p>Every artist was first an amateur</p>
                <span>- Ralph Waldo Emerson</span>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Event Time Area =================-->
<a href="/events">
    <section class="event_time_area">
        <div class="container">
            <div class="event_time_inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="event_text">
                            @if ($now !== null)
                            <h3>Next Event</h3>
                            <p>{{str_limit($now->description,20)}}</p>
                            @elseif($now == null)
                            <h3>No future events yet</h3>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="timer_inner">
                            <div id="timer" class="timer">
                                <div class="timer__section days">
                                    @if ($now !== null)
                                    <div class="timer__number">{{$now->titel}}</div>
                                    <div class="timer__label">{{date_diff(date_create(date("Y/m/d")),date_create($now->datum))->format("%d Days %h Hours %i Minute %s Seconds")}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</a>


<!--================Welcome Area =================-->
<section class="welcome_area pad_btm">
    <div class="container">
        <div class="welcome_inner row">
            <div class="col-lg-5">
                <div class="welcome_img">
                    <img class="img-fluid" src="{{asset('images/homebanner.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="welcome_text">
                    <h3>Welcome bij YAP</h3>
                    <p>Anno 1977 is de vzw YAP ("Young Artists Promotion") begonnen met de uitbouw van repetitielokalen
                        voor muzikanten in Leopoldsburg.
                        Einde jaren 90 is dan vanuit het provinciebestuur een structurele uitbouw van repetitielokalen
                        gestart over de hele provincie Limburg.
                        Toch heeft YAP zijn eigenheid en zelfstandigheid kunnen behouden en kan zich als oudste nog
                        bestaande initiatief uitroepen op dit vlak.<br> <br>
                        Momenteel is YAP een muzikantencentrum dat beschikt over een repetitielokaal en een ruime
                        concert-zaal, uitstekend geschikt voor PA repetities.
                        YAP beschikt over eigen professioneel licht- en geluidsmateriaal en uitstekende technici.
                        YAP organiseert ook elke maand een concert en wil zich daarmee profileren als club. Ga naar de
                        "events" pagina voor komende concerten.
                        Om dit alles te kunnen realiseren bestaat YAP uit een team van gemotiveerde en bekwame
                        vrijwilligers, die niet bang zijn om hun handen uit de mouwen te steken en er voluit voor te
                        gaan.
                        Het verleden van meer dan 30 jaar heeft bewezen dat de vzw borg kan staan voor een degelijke
                        werking en opvolging.
                        Zodoende kan aan de toekomst gewerkt worden en worden er meer mogelijkheden aan muziekgroepen
                        geboden en een stimulans aan het muzikaal experimenteren.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--================End Welcome Area =================-->

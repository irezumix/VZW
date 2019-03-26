@extends('layouts.frontend')
@section('includes.main-nav')
@endsection

@section('main-content')    






        <section class="home_banner_area">
            <div class="banner_inner">
				<div class="container">
					<div class="banner_content">
						<h2>Young Artists Promotion <br/>vzw</h2>
						<p>Every artist was first an amateur</p>
						<span>- Ralph Waldo Emerson</span>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Event Time Area =================-->
        <section class="event_time_area">
        	<div class="container">
        		<div class="event_time_inner">
        			<div class="row">
        				<div class="col-lg-6">
        					<div class="event_text">
        						<h3>Next Event will Start in</h3>
        						<p>EVENT DESCRIPTION</p>
        					</div>
        				</div>
        				<div class="col-lg-6">
        					<div class="timer_inner">
								<div id="timer" class="timer">
									<div class="timer__section days">
										<div class="timer__number"></div>
										<div class="timer__label">days</div>
									</div>
									<div class="timer__section hours">
										<div class="timer__number">1</div>
										<div class="timer__label">hours</div>
									</div>
									<div class="timer__section minutes">
										<div class="timer__number">1</div>
										<div class="timer__label">Minutes</div>
									</div>
									<div class="timer__section seconds">
										<div class="timer__number">1</div>
										<div class="timer__label">seconds</div>
									</div>
								</div>
							</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>


	<!--================Welcome Area =================-->
	<section class="welcome_area pad_btm">
		<div class="container">
			<div class="welcome_inner row">
				<div class="col-lg-5">
					<div class="welcome_img">
						<img class="img-fluid" src="{{asset('images/welcome-1.jpg')}}" alt="">
					</div>
				</div>
				<div class="col-lg-6 offset-lg-1">
					<div class="welcome_text">
						<h3>Welcome bij YAP</h3>
						<p>Anno 1977 is de vzw YAP ("Young Artists Promotion") begonnen met de uitbouw van repetitielokalen voor muzikanten in Leopoldsburg.
Einde jaren 90 is dan vanuit het provinciebestuur een structurele uitbouw van repetitielokalen gestart over de hele provincie Limburg.
Toch heeft YAP zijn eigenheid en zelfstandigheid kunnen behouden en kan zich als oudste nog bestaande initiatief uitroepen op dit vlak.<br> <br>
Momenteel is YAP een muzikantencentrum dat beschikt over een repetitielokaal en een ruime concert-zaal, uitstekend geschikt voor PA repetities.
YAP beschikt over eigen professioneel licht- en geluidsmateriaal en uitstekende technici.
YAP organiseert ook elke maand een concert en wil zich daarmee profileren als club. Ga naar de "events" pagina voor komende concerten.
Om dit alles te kunnen realiseren bestaat YAP uit een team van gemotiveerde en bekwame vrijwilligers, die niet bang zijn om hun handen uit de mouwen te steken en er voluit voor te gaan.
Het verleden van meer dan 30 jaar heeft bewezen dat de vzw borg kan staan voor een degelijke werking en opvolging.
Zodoende kan aan de toekomst gewerkt worden en worden er meer mogelijkheden aan muziekgroepen geboden en een stimulans aan het muzikaal experimenteren.
</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Welcome Area =================-->

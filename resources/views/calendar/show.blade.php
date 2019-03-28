@extends('layouts.frontend')
@section('main-content')


<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>Reservaties</h2>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->
<div class="back">
    <a href="{{route('calendar.index')}}" class="tickets_btn">Terug naar Kalender</a>
    <a href="{{route('calendar.add')}}" class="tickets_btn">Reserveer</a>
</div>


<div class="container-fluid invoice-overview">
    <div class="row text-dark border-top">
        <div class="col-2 text-center">Titel</div>
        <div class="col-2 text-center">Start datum</div>
        <div class="col-2 text-center">Eind datum</div>
        <div class="col-2"> </div>
        <div class="col-2 text-center">Bewerk</div>
        <div class="col-2 text-center">Verwijder</div>
    </div>

    @foreach($events as $event)

    <div class="row border-bottom">
        <div class="col-2 text-center"> {{$event->event_name}} </div>
        <div class="col-2 text-center"> {{$event->start_date}} </div>
        <div class="col-2 text-center"> {{$event->end_date}} </div>
        <div class="col-2"> </div>
        <div class="col-2 text-center"> <a href="{{route('calendar.edit',$event->id)}}">x</a> </div>
        <div class="col-2 text-center"> <a href="{{route('calendar.delete',$event->id)}}">x</a> </div>

    </div>
    @endforeach
</div>
@endsection



{{-- Vragen: 
    - Hoe zet ik mijn datums om naar een correcte notatie?
    - Hoe kan ik mijn  --}}

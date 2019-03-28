@extends('layouts.frontend')
@section('main-content')



<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>Kalender</h2>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->
<div class="back">
    <a href="{{route('calendar.add')}}" class="tickets_btn">Reserveer</a>
    <a href="{{route('calendar.show')}}" class="tickets_btn">Mijn reservaties</a>
</div>
<hr>


<div class="col-md-12 col-md-offset-2">
    <div class="panel panelCalendar panel-default">
        <div class="panel-body">
            {!! $calendar_details->calendar() !!}
        </div>
    </div>
</div>
{!! $calendar_details->script() !!}
<script>

</script>
@endsection

@extends('layouts.frontend')
@section('main-content')



<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>Reserveer!</h2>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->
<div class="back">
    <a href="{{route('calendar.index')}}" class="tickets_btn">Terug naar kalender</a>
    <a href="{{route('calendar.show')}}" class="tickets_btn">Mijn reservaties</a>
</div>

<div class="container">
    <div class="panel-primary">
        <div class="panelbody">
            {!! Form::open(array('route'=> 'calendar.add','methood'=>'POST','files'=>'true')) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                    @elseif (Session::has('warning'))
                    <div class="alert alert-danger">{{Session::get('warning') }}</div>
                    @endif
                </div>
                {{-- ============================================================================
    ===================================== NAAM RESERVATIE  ===============================
    ==========================================================================--}}


                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        {!! Form::label('event_name','Naam reservatie:')!!}
                        <div class="">
                            {!!Form::text('event_name',null,['class'=>'form-control'])!!}
                            {!! $errors->first('event_name', '<p class="alert alert-danger">Vul een reservatienaam in
                                aub.</p>') !!}
                        </div>
                    </div>
                </div>

                {{-- ============================================================================
    ===================================== USER_ID  ===============================
    ==========================================================================--}}


                <div class="col-xs-6 col-sm-6 col-md-6 hidden">
                    <div class="form-group ">
                        {!! Form::label('user_id','User ID')!!}
                        <div class="">
                            {!!Form::text('user_id',Auth::user()->id,['class'=>'form-control'])!!}
                        </div>
                    </div>
                </div>

                {{-- ============================================================================
    ===================================== START DATUM  ===============================
    ==========================================================================--}}


                <div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="form-group">
                        {!! Form::label('start_date','Start datum:')!!}
                        <div class="">
                            {!!Form::date('start_date',null,['class'=>'form-control'])!!}
                            {!! $errors->first('start_date', '<p class="alert alert-danger">Vul een correcte datum in
                            </p>') !!}
                        </div>
                    </div>
                </div>

                {{-- ============================================================================
    ===================================== EIND DATUM  ===============================
    ==========================================================================--}}

                <div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="form-group">
                        {!! Form::label('end_date','Eind datum:')!!}
                        <div class="">
                            {!!Form::date('end_date',null,['class'=>'form-control'])!!}
                            {!! $errors->first('end_date', '<p class="alert alert-danger"> Vul een correcte datum in</p>
                            ') !!}
                        </div>
                    </div>
                </div>

                <div class="col-xs-4 col-sm-4 col-md-4 formBtn">
                    {!!Form::submit('Add Event',['class'=>'tickets_btn']) !!}
                </div>


            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection

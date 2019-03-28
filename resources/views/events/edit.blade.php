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
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Event Area =================-->
<section class="event_area p_120">
    <div class="container">




        <form action="{{ route('events.update', $event->id) }}" method="post" class="create-edit-form">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-sm-2">
                    <label for="titel">Titel Concert</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" id="titel" name="titel" class="form-control" value="{{$event->titel}}">
                    @if($errors->has('titel'))
                    <span class="error">
                        {{ $errors->first('titel') }}
                    </span>
                    @endif
                </div>
                <div class="col-sm-2">
                    <label for="prijs">Inkomprijs</label>
                </div>
                <div class="col-sm-10">
                    <span class="input-euro left">
                        <input type="number" min="0" step="any" id="prijs" name="prijs" class="form-control"
                            value="{{$event->prijs}}"> </span>
                    @if($errors->has('prijs'))
                    <span class="error">
                        {{ $errors->first('prijs') }}
                    </span>
                    @endif
                    </span>

                </div>
                <div class="col-md-2 col-sm-2">
                    <label for="datum">Datum</label>
                </div>
                <div class="col-md-4 col-sm-10">
                    <input type="date" id="datum" name="datum" placeholder="YYYY-MM-DD" class="form-control"
                        value="{{$event->datum}}">
                    @if($errors->has('datum'))
                    <span class="error">
                        {{ $errors->first('datum') }}
                    </span>
                    @endif
                    </span>
                </div>
                <div class="col-md-2 col-sm-2 test">
                    <label for="tickets">Link naar tickets</label>
                </div>
                <div class="col-md-4 col-sm-10">



                    <input type="text" id="tickets" name="tickets" class="form-control" value="{{$event->tickets}}">
                    @if($errors->has('tickets'))
                    <span class="error">
                        {{ $errors->first('tickets') }}
                    </span>
                    @endif
                    </span>

                </div>
                <div class="col-sm-2">
                    <label for="genre">Genre</label>
                </div>
                <div class="col-sm-10">

                    <input type="text" id="genre" name="genre" class="form-control" value="{{$event->genre}}">
                    @if($errors->has('genre'))
                    <span class="error">
                        {{ $errors->first('genre') }}
                    </span>
                    @endif
                    </span>

                </div>
                {{-- <div class="col-sm-2">Genre</div>
                        <div class="col-sm-10">
        
                                        <select id="betaald" name="betaald" class="form-control">
                                                <option disabled selected>-- GENRE --</option>
                                                <option value="0">niet betaald</option>
                                                <option value="1">betaald</option>
                                        </select>               
                                        
                                        @if($errors->has('betaald'))
                                        <span class="error">
                                            {{ $errors->first('betaald') }}
                </span>
                @endif


            </div> --}}
            <div class="col-sm-2">
                <label for="description">Omschrijving</label>
            </div>
            <div class="col-sm-10">
                <textarea name="description" id="description" class="form-control" id="" cols="40"
                    rows="4">{{$event->description}}</textarea>
                @if($errors->has('description'))
                <span class="error">
                    {{ $errors->first('description') }}
                </span>
                @endif
                </span>

            </div>

    </div>
    </div>

    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <button type="submit" class="form-control form-control-lg mt-3">PAS EVENEMENT AAN</button>
        </div>
    </div>


    </form>




</section>
<!--================End event Area =================-->
@endsection

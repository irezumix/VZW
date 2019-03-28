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
<div class="back">
    <a href="{{route('events')}}" class="tickets_btn">Events</a>
</div>
<!--================Event Area =================-->
<section class="event_area p_120">
    <div class="container">




        <form action="{{ route('events.store') }}" method="post" class="create-edit-form">
            {{ csrf_field() }}

            <div class="row">



                {{-- ============================================================================
    ===================================== TITEL =================================
    ==========================================================================--}}


                <div class="col-sm-2">
                    <label for="titel">Titel Concert</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" id="titel" name="titel" class="form-control">
                    @if($errors->has('titel'))
                    <span class="error">
                        {{ $errors->first('titel') }}
                    </span>
                    @endif
                </div>

                {{-- ============================================================================
    ===================================== Inkomprijs ==========================
    ==========================================================================--}}

                <div class="col-sm-2">
                    <label for="prijs">Inkomprijs</label>
                </div>
                <div class="col-sm-10">
                    <span class="input-euro left">
                        <input type="number" min="0" step="any" id="prijs" name="prijs" class="form-control">
                    </span>
                    @if($errors->has('prijs'))
                    <span class="error">
                        {{ $errors->first('prijs') }}
                    </span>
                    @endif
                    </span>

                </div>

                {{-- ============================================================================
    ===================================== DATUM =================================
    ==========================================================================--}}

                <div class="col-md-2 col-sm-2">
                    <label for="datum">Datum</label>
                </div>
                <div class="col-md-4 col-sm-10">
                    <input type="date" id="datum" name="datum" placeholder="YYYY-MM-DD" class="form-control">
                    <input type="time" id="time" name="time" class="form-control">
                    @if($errors->has('datum'))
                    <span class="error">
                        {{ $errors->first('datum') }}
                    </span>
                    @endif
                    </span>
                </div>



                {{-- ============================================================================
    ===================================== TICKETS ================================
    ==========================================================================--}}


                <div class="col-md-2 col-sm-2 test">
                    <label for="tickets">Link naar tickets</label>
                </div>
                <div class="col-md-4 col-sm-10">
                    <input type="text" id="tickets" name="tickets" class="form-control">
                    @if($errors->has('tickets'))
                    <span class="error">
                        {{ $errors->first('tickets') }}
                    </span>
                    @endif
                    </span>

                </div>


                {{-- ============================================================================
    ===================================== GENRE =================================
    ==========================================================================--}}

                <div class="col-sm-2 col-md-2 test">
                    <label for="genre">Genre</label>
                </div>
                <div class="col-md-4 col-sm-10">

                    <input type="text" id="genre" name="genre" class="form-control">
                    @if($errors->has('genre'))
                    <span class="error">
                        {{ $errors->first('genre') }}
                    </span>
                    @endif
                    </span>
                </div>


                {{-- ============================================================================
    ===================================== POSTER  ===============================
    ==========================================================================--}}


                <div class="col-sm-2 col-md-2 test">Poster</div>
                        <div class="col-md-4 col-sm-10">
        
                                        <input type="file" id="file" name="file" class="form-control">             
                                        
                                        @if($errors->has('file'))
                                        <span class="error">
                                            {{ $errors->first('file') }}
                </span>
                @endif


            </div>


            {{-- ============================================================================
    ===================================== Omschrijving ==========================
    ==========================================================================--}}


            <div class="col-sm-2">
                <label for="description">Omschrijving</label>
            </div>
            <div class="col-sm-10">
                <textarea name="description" id="description" class="form-control" id="" cols="40" rows="4"></textarea>
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
            <button type="submit" class="form-control form-control-lg mt-3">VOEG EVENEMENT TOE</button>
        </div>
    </div>


    </form>




</section>
@endsection

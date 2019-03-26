@extends('layouts.frontend')
@section('includes.main-nav')
@endsection

@section('main-content')    

        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
                    <h2>{{$events_details->titel}}</h2>
					</div>
				</div>
            </div>
        </section>




        <section class="event_area p_120_details">
        	<div class="container_details">
        		<div class="row event_inner_details">
                        <div class="col-lg-4 col-sm-6">
                            <div class="event_item">
                                <div class="event_img_details">
                                <img class="img-fluid" src="{{asset('images/emmure.jpg')}}" alt="">
                                </div>
        				</div>
                    </div>
                     <div class="col-lg-6 col-sm-6">
                            <div class="event_item_details">
                                <div class="event_name_details">
                                <h4>{{$events_details->titel}}</h4>
                                
                                <span class="action_btn"><a class="nav-link" href="{{ route('events.edit', $events_details->id) }}">Edit</a></span>
                                {{-- <span class="action_btn"><a class="nav-link" href="{{ route('events.delete', $events_details->id) }}">Delete</a></span> --}}
                                
                                <p>Genre: {{$events_details->genre}}</p>
                                        <p>Datum: {{$events_details->datum}}</p>
                                        <p>&euro; {{$events_details->prijs}}</p>
                                        <p>Ticket kopen &rArr; {{$events_details->tickets}} </p>
                                        <hr>
                            </div>
                            <div class="event_description">
                                    <h6>Description</h6>
                                    <p>
                                        {{$events_details->description}}
                                    </p>
                                        
        					</div>
        				</div>
        			</div>

                                    
               
                </div>
        	</div>
        </section>
        @endsection
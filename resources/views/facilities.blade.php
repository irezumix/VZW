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
                <h2>Faciliteiten &amp; Prijzen</h2>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->
<div class="container">
    <div class="row">
        <div class="col-md-12">



            <section id="content">
                <div id="accordion" class="accordion-container">
                    <article class="content-entry">
                        <h4 class="article-title accordion_btn"><i></i>Try Out ruimte</h4>
                        <div class="accordion-content">
                            <p> 1 mei 2008 was de opening van de try-out ruimte.
                                De ruimte van 18m50 op 8m75 biedt de mogelijkheden om met een PA- en lichtinstallatie te
                                repeteren.
                                Verder kunnen techniekers hier praktische ervaring opdoen en kan een muziekgroep zich
                                hier aan bv. concertorganisatoren voorstellen.
                                Het multifunctionele van deze ruimte biedt een basis waar zeer snel en zonder al te veel
                                aanpassingen activiteiten kunnen opgezet worden en waar aan alle behoeften voldaan
                                wordt.
                                Er kan geopteerd worden voor een 80-tal theater zitplaatsen of 170 staanplaatsen.
                                Als activiteiten wordt dan gedacht aan try-out concerten en voorstellingen aan het
                                publiek van bekende en minder bekende muziekgroepen, theatergezelschappen, comedy of
                                andere podiumactiviteiten.
                                Alsook film/video projectie, filmopnamestudio, persvoorstellingen, locatie voor "hidden
                                surprise" optredens van bekende(re) groepen en veel meer.
                                Vanaf het najaar 2014 is YAP ook gestart met het organiseren van maandelijkse
                                club-optredens. Voor de historiek en komende concerten: check elders op deze web-site.
                                Om de goede relatie met de buurtbewoners te behouden hebben optredens die
                                geluidsoverlast met zich kunnen meebrengen 24u als einde van het optreden.
                            </p>
                        </div>
                        <!--/.accordion-content-->
                    </article>

                    <article class="content-entry">
                        <h4 class="article-title accordion_btn"><i></i>Repetitielokaal</h4>
                        <div class="accordion-content">
                            <p> Als een getalenteerde muziekgroep de gedroomde doorbraak niet bereikt, heeft dit soms te
                                maken met een gebrek aan repeteerruimte. Daarom heeft YAP als doel muzikanten een
                                professionele ruimte en een technische omgeving te bieden.
                                Het repetitielokaal voor muziekgroepen van 6m85 op 4m10 is uitgerust met muurbekleding
                                van zwart tapijt, een laminaatvloer, elektrische verwarming, airco, sfeervolle halogeen-
                                en par-verlichting.
                                De ruimte is akoestisch geisoleerd naar buiten toe en beschikt binnen over een 'warme'
                                klank.
                                De voorziene zanginstallatie bestaat uit 2 actieve JBL Eon15 G2 monitors van elk 400W;
                                een Yamaha MG 82 CX mengpaneel met ingebouwde effectprocessor; een Teac CD-player en 3
                                Shure SM58 zangmicrofoons en statieven.
                                Sleep je niet graag met je instrumenten? We bieden ook de mogelijkheid om ze veilig op
                                te bergen in één van onze aparte, afgesloten materiaal-ruimtes.
                                Er is voorziening van gekoelde dranken.</p>
                        </div>
                        <!--/.accordion-content-->
                    </article>

                    <article class="content-entry">
                        <h4 class="article-title accordion_btn"><i></i>Artiestenruimte</h4>
                        <div class="accordion-content">
                            <p>Voel je als artiest of groep welkom in onze gezellige artiestenruimte waar we ons best
                                doen om jullie met de beste zorgen te omringen.
                                We beschikken over een gezellige zitruimte, een aparte eetruimte, en aparte sanitaire
                                voorzieningen.
                                Onze catering is altijd vers en "home-made".
                                Be our guest... and feel at home.</p>
                        </div>
                        <!--/.accordion-content-->
                    </article>
                </div>
                <!--/#accordion-->

            </section>
            <!--/#content-->

            <div class="col-md-12">
                <section class="price_area p_120">
                    <div class="container">
                        <div class="main_title">
                            <h2>Prijzen</h2>
                            <p></p>
                        </div>
                        <div class="price_inner row m0">
                            <div class="col-lg-3 col-sm-6 p0">
                                <div class="price_item">
                                    <div class="price_text">
                                        <h3>Basic</h3>
                                        <h5>eenmalige repetitie</h5>
                                        <h2>50&euro;<span>/4u</span></h2>
                                        <ul class="list">
                                            <li><a href="#">Zaal</a></li>
                                            <li><a href="#">-</a></li>
                                            <li><a href="#">-</a></li>
                                            <li><a href="#">-</a></li>

                                        </ul>
                                    </div>
                                    <a class="price_btn" href="{{route('contact')}}">Get Started</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 p0">
                                <div class="price_item">
                                    <div class="price_text">
                                        <h3>PA aware</h3>
                                        <h5>Eenmalige repetitie</h5>
                                        <h2>80&euro;<span>/4u</span></h2>
                                        <ul class="list">
                                            <li><a href="#">Zaal</a></li>
                                            <li><a href="#">PA-installatie</a></li>
                                            <li><a href="#">-</a></li>
                                            <li><a href="#">-</a></li>

                                        </ul>
                                    </div>
                                    <a class="price_btn" href="{{route('contact')}}">Get Started</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 p0">
                                <div class="price_item">
                                    <div class="price_text">
                                        <h3>Lichtgevoelig</h3>
                                        <h5>Eenmalige repetitie</h5>
                                        <h2>100&euro;<span>/4u</span></h2>
                                        <ul class="list">
                                            <li><a href="#">Zaal</a></li>
                                            <li><a href="#">PA-installatia</a></li>
                                            <li><a href="#">Licht-installatie</a></li>
                                            <li><a href="#">-</a></li>
                                        </ul>
                                    </div>
                                    <a class="price_btn" href="{{route('contact')}}">Get Started</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 p0">
                                <div class="price_item">
                                    <div class="price_text">
                                        <h3>Full show</h3>
                                        <h5> Eenmalige repetitie</h5>
                                        <h2>150&euro;<span>/4u</span></h2>
                                        <ul class="list">
                                            <li><a href="#">Zaal</a></li>
                                            <li><a href="#">PA-installatie</a></li>
                                            <li><a href="#">Licht-installatie</a></li>
                                            <li><a href="#">Technieker - Licht & Geluid</a></li>
                                        </ul>
                                    </div>
                                    <a class="price_btn" href="{{route('contact')}}">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>
        <!--================End event Area =================-->





        @endsection

@extends('home.down')
@section('content')


<!-- Inner Banner -->
        <div class="inner-banner inner-banner-bg8">
            <div class="container">
                <div class="inner-title text-center">
                    <!--<h3>Coming Soon</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Coming Soon</li>
                    </ul>-->
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Start Coming Soon Area -->
        <div class="coming-soon-area ptb-100">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="coming-soon-content">
                            <h1>Votre site est de retour très bientôt</h1>
                            <p>Nous travaillons à l'amélioration du site</p>

                            <div id="timer">
                                <div id="days"></div>
                                <div id="hours"></div>
                                <div id="minutes"></div>
                                <div id="seconds"></div>
                            </div>
                            
                            <!--<form class="newsletter-form" data-toggle="validator">
                                <input type="email" class="input-newsletter" placeholder="Enter email address" name="EMAIL" required autocomplete="off">
            
                                <button type="submit" class="default-btn two">
                                    Subscribe now
                                </button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Coming Soon Area End -->



@endsection
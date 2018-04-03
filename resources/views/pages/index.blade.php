@extends('layout')

@section('content')

<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 slider">
                <div class="main-container">
                    <img src="https://c.pxhere.com/photos/5a/26/notebook_laptop_work_pc_computer_outdoors_park_lawn-949610.jpg!d">
                    <h2 class="hi">Hi, I'm Edgars. I create things.</h2><br>
                    <a href="mailto:edgars.liepajnieks@gmail.com">
                        <button type="button" class="btn-contact">Contact Me</button>
                    </a>
                </div> <!--main picture with button-->
            </div> 
        </div>
        <div class="row spacing-row">
            <div class="col-xs-12 col-sm-6 col-md-4 small-article">
                <div class="row">
                    <div class="col-sm-4 hidden-xs gray-cat">
                        <a href="/article1">
                            <img src="storage/yachtlogo.jpg">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-8">
                        <h4>
                            <a href="/article1">
                                Things I have engineered!
                            </a>
                        </h4>
                        <p>
                            Exclusive, very expensive, yachts for millionares.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 small-article">
                <div class="row">
                    <div class="col-sm-4 hidden-xs gray-cat">
                        <a href="/article2">
                            <img src="http://fluentthemes.com/wordpress/wp-content/uploads/2017/04/background-cooler-code-6.png">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-8">
                        <h4>
                            <a href="/article2">
                                My goals now!
                            </a>
                        </h4>
                        <p>
                            Just finished courses in web development, and now I'm looking for some job opportunities.<br>
                            I'm ready to learn and use my knowledge in real life. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 small-article">
                <div class="row">
                    <div class="col-sm-4 hidden-xs gray-cat">
                        <a href="/article3">
                            <img src="https://australianfintech.com.au/wp-content/uploads/2018/01/AI.jpg">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-8">
                        <h4>
                            <a href="/article3">
                                Things I would like to create someday!
                            </a>
                        </h4>
                        <p>
                            Artificial Intelligence "AI" or also called machine intelligence.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
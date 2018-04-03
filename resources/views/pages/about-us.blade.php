@extends('layout')

@section('content')
<main class="main">
    <div class="container">
        <div class="row shortcut">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="/about-us">About us</a></li>
            </ul>
        </div>
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Interesting Facts About Computers</a></li>
                <li><a href="#tabs-2">Programmer jokes</a></li>
                <li><a href="#tabs-3">Error 418</a></li>
            </ul>
            <div id="tabs-1">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-sm-4 hidden-xs">
                                <img class="tab-img" src="http://www.channelfutures.com/sites/channelfutures.com/files/styles/article_featured_standard/public/uploads/2015/11/7013588-watching-together_0.jpg?itok=1JGj7bow">
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <p>
                                    The first electronic computer ENIAC weighed more than 27 tons and took up 1800 square feet.<br>
                                    Only about 10% of the world’s currency is physical money, the rest only exists on computers.<br>
                                    The password for the computer controls of nuclear tipped missiles of the U.S was 00000000 for eight years.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tabs-2">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-sm-4 hidden-xs">
                                <img class="tab-img" src="https://assets.hongkiat.com/uploads/programming-jokes/joke-foo-hello-world.jpg">
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <p>
                                    Software developers like to solve problems. If there are no problems available, they will create their own problems. It’s an addiction.<br>
                                    A programmer puts two glasses on his bedside table before going to sleep. A full one, in case he gets thirsty, and an empty one, in case he doesn’t.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tabs-3">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-sm-4 hidden-xs">
                                <img class="tab-img" src="https://exceptionnotfound.net/content/images/2015/10/418teapot--1-.jpg">
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <p>
                                    When everything goes wrong, remember: "teapot".
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <h4>Contacts</h4>
        </div>
        <div class="row map-contacts">
            <div class="col-xs-12 contacts">
                <div class="row">
                    <div class="col-sm-5">
                        <div id="map">
                            Google maps
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <h5>Adress:</h5>
                        <p>Rīga, Latvia</p>
                        <h5>Email:</h5>
                        <a href="mailto:edgars.liepajnieks@gmail.com">edgars.liepajnieks@gmail.com</a>
                        <h5>Phone:</h5>
                        <p>+371 20096797</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
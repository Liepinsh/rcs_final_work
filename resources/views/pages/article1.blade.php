@extends('layout')

@section('content')
<main class="main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="/articles">Articles</a></li>
            <li><a href="/article1">Article1</a></li>
        </ul>
        <div class="row spacing-row">
            <div class="col-xs-12 small-article">
                <div class="row">
                    <div class="col-sm-3 hidden-xs images-col">
                        <a href="storage/yacht.jpg" class="cat">
                            <img src="storage/yacht.jpg">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-9">
                        <h4>Things I have engineered!</h4>
                        <p>
                            I have engineered 2 exclusive 53m trimarans, 3 fish feeding barges and multiple smaller boats. <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row spacing-row">
            <div class="col-xs-12 small-article">
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <div class="row spacing-bottom">
                            <div class="col-sm-4 hidden-xs images-col">
                                <a href="storage/yacht1.jpg" class="cat">
                                    <img src="storage/yacht1.jpg">
                                </a>
                            </div>
                            <div class="col-sm-4 hidden-xs images-col">
                                <a href="storage/yacht2.jpg" class="cat">
                                    <img src="storage/yacht2.jpg">
                                </a>
                            </div>
                            <div class="col-sm-4 hidden-xs images-col">
                                <a href="storage/yacht3.jpg" class="cat">
                                    <img src="storage/yacht3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 hidden-xs images-col">
                                <a href="storage/yacht1.jpg" class="cat">
                                    <img src="storage/yacht1.jpg">
                                </a>
                            </div>
                            <div class="col-sm-4 hidden-xs images-col">
                                <a href="storage/yacht2.jpg" class="cat">
                                    <img src="storage/yacht2.jpg">
                                </a>
                            </div>
                            <div class="col-sm-4 hidden-xs images-col">
                                <a href="storage/yacht3.jpg" class="cat">
                                    <img src="storage/yacht3.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-9">
                        <div class="row">
                            <div class="col-xs-12">
                                <p>
                                I worked for exclusive yacht company for 3 years.<br>
                                During that time, I worked as a naval engineer, to create the world's biggest trimaran, built from composite materials.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
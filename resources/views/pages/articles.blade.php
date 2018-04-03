@extends('layout')

@section('content')

<main class="main">
    <div class="container">
        <div class="row">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="/articles">Articles</a></li>
            </ul>
            <div class="col-xs-12 small-article">
                <a href="/article1" class="article1">
                    <div class="row">
                        <div class="col-sm-2 col-xs-12">
                            <img src="storage/yachtlogo.jpg">
                        </div>
                        <div class="col-xs-12 col-sm-10">
                            <h4>Things I have engineered!</h4>
                            <p>
                            Exclusive, very expensive, yachts for millionares.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 small-article">
                <a href="/article2" class="article2">
                    <div class="row">
                        <div class="col-sm-2 hidden-xs">
                            <img src="http://fluentthemes.com/wordpress/wp-content/uploads/2017/04/background-cooler-code-6.png">
                        </div>
                        <div class="col-xs-12 col-sm-10">
                            <h4>My goals now!</h4>
                            <p>
                                Just finished courses in web development, and now I'm looking for some job opportunities.<br>
                                I'm ready to learn and use my knowledge in real life.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 small-article">
                <a href="/article3" class="article3">
                    <div class="row">
                        <div class="col-sm-2 col-xs-12">
                            <img src="https://australianfintech.com.au/wp-content/uploads/2018/01/AI.jpg">
                        </div>
                        <div class="col-xs-12 col-sm-10">
                            <h4>Things I would like to create someday!</h4>
                            <p>
                                Artificial Intelligence "AI" or also called machine intelligence.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12">
                <hr>
            </div>
        </div>     
        <div class="row page-numbers">
            <div class="col-md-12">
                <ul class="paging">
                    <li>
                        <a href="/articles"><<</a>
                    </li>
                    <li>
                        <a href="/articles">1</a>
                    </li>
                    <li>
                        <a href="/articles">2</a>
                    </li>
                    <li class="active">
                        <a href="/articles">3</a>
                    </li>
                    <li>
                        <a href="/articles">4</a>
                    </li>
                    <li>
                        <a href="/articles">5</a>
                    </li>
                    <li>
                        <a href="/articles">>></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>
@endsection
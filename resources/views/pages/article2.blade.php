@extends('layout')

@section('content')
<main class="main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="/articles">Articles</a></li>
            <li><a href="/article2">Article2</a></li>
        </ul>
        <div class="row spacing-row">
            <div class="col-xs-12 small-article">
                <div class="row">
                    <div class="col-sm-3 hidden-xs images-col">
                        <a href="https://redtodoonline.com/wp-content/uploads/2018/03/EaseUS-Software-de-f%C3%A1cil-acceso.jpeg">
                            <img src="https://redtodoonline.com/wp-content/uploads/2018/03/EaseUS-Software-de-f%C3%A1cil-acceso.jpeg">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-9">
                        <h4>My goals now!</h4>
                        <p>
                            Just finished web development courses in "Riga Coding School",<br>
                            so now I'm looking for some job opportunities in this feald.<br>
                            I would like to continue learning in: HTML, CSS, JS, PHP, LARAVEL,<br>
                            and I would like to learn some new languages.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row spacing-row">
            <div class="col-xs-12 small-article">
                <div class="row">
                    <div class="col-sm-3 hidden-xs images-col">
                        <div class="row spacing-bottom">
                            <div class="col-sm-4 hidden-xs">
                                <a href="https://codigocero.com/IMG/jpg/computadora_equipamento-3.jpg">
                                    <img src="https://codigocero.com/IMG/jpg/computadora_equipamento-3.jpg">
                                </a>
                            </div>
                            <div class="col-sm-4 hidden-xs">
                                <a href="https://previews.123rf.com/images/mocho1/mocho11508/mocho1150800003/44254197-web-developer-infographics-on-a-blue-background-vector-illustration-.jpg">
                                    <img src="https://previews.123rf.com/images/mocho1/mocho11508/mocho1150800003/44254197-web-developer-infographics-on-a-blue-background-vector-illustration-.jpg">
                                </a>
                            </div>
                            <div class="col-sm-4 hidden-xs">
                                <a href="https://wukmedia.uk/wp-content/uploads/2017/06/web-design-tea.jpg">
                                    <img src="https://wukmedia.uk/wp-content/uploads/2017/06/web-design-tea.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-sm-4 hidden-xs">
                                    <a href="http://getwallpapers.com/wallpaper/full/e/6/4/489007.jpg">
                                        <img src="http://getwallpapers.com/wallpaper/full/e/6/4/489007.jpg">
                                    </a>
                                </div>
                                <div class="col-sm-4 hidden-xs">
                                    <a href="http://2.bp.blogspot.com/-bSrw35JT6Hs/VcYveRh-IcI/AAAAAAAADrY/wkQfXaQ7L9Q/s1600/quote%2B1.png">
                                        <img src="http://2.bp.blogspot.com/-bSrw35JT6Hs/VcYveRh-IcI/AAAAAAAADrY/wkQfXaQ7L9Q/s1600/quote%2B1.png">
                                    </a>
                                </div>
                                <div class="col-sm-4 hidden-xs">
                                    <a href="http://devfloat.net/wp-content/uploads/2016/01/Code-It-Logical-HD-Wallpaper.jpg">
                                        <img src="http://devfloat.net/wp-content/uploads/2016/01/Code-It-Logical-HD-Wallpaper.jpg">
                                    </a>
                                </div>
                            </div>
                    </div>
                    <div class="col-xs-12 col-sm-9">
                            <div class="row">
                                <div class="col-xs-12">
                                    <p>
                                        Things I learned in this course:
                                        <ol>
                                            <li>HTML</li>
                                            <li>CSS</li>
                                            <li>JavaScript</li>
                                            <li>PHP</li>
                                            <li>Laravel</li>
                                            <li>MySQL</li>
                                        </ol>

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
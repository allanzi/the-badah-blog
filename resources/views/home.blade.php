<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Badah Blog</title>

        <!-- Styles -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet">
        <link href="{!!elixir('css/all.css')!!}" rel="stylesheet">
    </head>
    <body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
            mdl-layout--fixed-tabs">
        <header class="mdl-layout__header grey lighten-1 black-text">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <h1 class="mdl-layout-title logo">The Badah Blog</h1>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                {{--Search--}}
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
                    <label class="mdl-button mdl-js-button mdl-button--icon"
                           for="waterfall-exp">
                        <i class="material-icons">search</i>
                    </label>
                    <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" name="sample"
                               id="waterfall-exp">
                    </div>
                </div>
            </div>
            <!-- Tabs -->
            <div class="mdl-layout__tab-bar mdl-js-ripple-effect grey darken-3">
                <a href="#scroll-tab-1" class="mdl-layout__tab is-active">Recentes</a>
                <a href="#scroll-tab-2" class="mdl-layout__tab">Populares</a>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Title</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="">Link</a>
                <a class="mdl-navigation__link" href="">Link</a>
                <a class="mdl-navigation__link" href="">Link</a>
                <a class="mdl-navigation__link" href="">Link</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
                <div class="page-content container">
                    <!-- Set up your HTML -->
                    <!-- TESTIMONIALS -->
                    <section class="testimonials">
                        <div class="container">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div id="customers-testimonials" class="owl-carousel">

                                        <!--TESTIMONIAL 1 -->
                                        <div class="item">
                                            <div class="shadow-effect">
                                                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                                                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
                                            </div>
                                            <div class="testimonial-name">EMILIANO AQUILANI</div>
                                        </div>
                                        <!--END OF TESTIMONIAL 1 -->
                                        <!--TESTIMONIAL 2 -->
                                        <div class="item">
                                            <div class="shadow-effect">
                                                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                                                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
                                            </div>
                                            <div class="testimonial-name">ANNA ITURBE</div>
                                        </div>
                                        <!--END OF TESTIMONIAL 2 -->
                                        <!--TESTIMONIAL 3 -->
                                        <div class="item">
                                            <div class="shadow-effect">
                                                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                                                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
                                            </div>
                                            <div class="testimonial-name">LARA ATKINSON</div>
                                        </div>
                                        <!--END OF TESTIMONIAL 3 -->
                                        <!--TESTIMONIAL 4 -->
                                        <div class="item">
                                            <div class="shadow-effect">
                                                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                                                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
                                            </div>
                                            <div class="testimonial-name">IAN OWEN</div>
                                        </div>
                                        <!--END OF TESTIMONIAL 4 -->
                                        <!--TESTIMONIAL 5 -->
                                        <div class="item">
                                            <div class="shadow-effect">
                                                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                                                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
                                            </div>
                                            <div class="testimonial-name">MICHAEL TEDDY</div>
                                        </div>
                                        <!--END OF TESTIMONIAL 5 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- END OF TESTIMONIALS -->
                </div>
            </section>
            <section class="mdl-layout__tab-panel" id="scroll-tab-2">
                <div class="page-content container">
                    badah 2
                </div>
            </section>
        </main>
    </div>
        <!-- JavaScripts -->
        <script src="{!! elixir('js/all.js')!!}"></script>
    </body>
</html>

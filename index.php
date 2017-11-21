<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="https://getbootstrap.com/favicon.ico">
        <title>BLook</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/carousel.css" rel="stylesheet">
        <link href="./css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="css/style.css" rel='stylesheet' type='text/css'>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/holder.min.js"></script>
        <script src="js/ie-emulation-modes-warning.js"></script>
        <script src="js/ie10-viewport-bug-workaround.js"></script>
    </head>
    <body>
        <div class="head-bottom">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="videos.html">Videos</a></li>
                        <li><a href="reviews.html">Reviews</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tech <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="tech.html">Action</a></li>
                                <li><a href="tech.html">Action</a></li>
                                <li><a href="tech.html">Action</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Culture <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="singlepage.html">Action</a></li>
                                <li><a href="singlepage.html">Action</a></li>
                                <li><a href="singlepage.html">Action</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Science <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="singlepage.html">Action</a></li>
                                <li><a href="singlepage.html">Action</a></li>
                                <li><a href="singlepage.html">Action</a></li>
                            </ul>
                        </li>
                        <li><a href="design.html">Design</a></li>
                        <li><a href="business.html">Business</a></li>
                        <li><a href="world.html">World</a></li>
                        <li><a href="forum.html">Forum</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="images/banner/01.jpg" alt="IMG 01">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Título da #@#$% do Slide</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="first-slide" src="images/images/banner/02.jpg" alt="IMG 02">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Título da #@#$% do Slide2</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="first-slide" src="images/banner/03.jpg" alt="IMG 03">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Título da #@#$% do Slide2</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="#myCarousel" class="left carousel-control" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        </a>
        <a href="#myCarousel" class="right carousel-control" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        </a>
    </div>

    <main role="container-fluid">
        <?php
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
        } else {
            $url = 'home';
        }

        switch ($url) {
            case $url: include 'paginas/' . $url . '.php';
                break;
        }
        ?>
        <div class="clearfix"></div>
        <!-- FOOTER -->
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>© 2017 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </footer>

    </main>
    <?php
    // put your code here
    ?>

</body>
</html>

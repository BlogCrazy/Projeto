<?php require './cnf/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
    <?php include_once 'parts/HeadTag.php'; ?>
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
                    <?php include_once'parts/Menu.php' ?>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <?php include_once'parts/CarouselContent.php' ?>
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
        <?php include_once 'parts/Footer.php'; ?>

    </main>
    <?php
    // put your code here
    ?>

</body>
</html>

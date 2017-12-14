<!-- technology -->
<?php
if (!isset($_GET['Noticia'])) {
    ?>
    <div class="technology-1">
        <div class="container">

            <div class="col-md-9"  style="float: left;margin:0">
                <div class="business">

                    <?php
                    //                print_r($conexao)/
                    $QueryBuscarArtigo = "
                SELECT * FROM artigos;
                ";

                    $ExeQrBuscarArtigos = mysqli_query($conexao, $QueryBuscarArtigo);

                    while ($rArtigos = mysqli_fetch_assoc($ExeQrBuscarArtigos)) {
                        ?>
                        <div class="rev-1">
                            <div class="rev-img">
                                <a href="index.php?url=Informatica&Noticia=<?php echo $rArtigos['id_artigo'] ?>"><img src="images/1.jpg" class="img-responsive" alt=""></a>
                            </div>
                            <div class="rev-info">
                                <h3><a href="index.php?url=Informatica&Noticia=<?php echo $rArtigos['id_artigo'] ?>"><?php echo $rArtigos['titulo_artigo'] ?></a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.isicing </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <?php
                    }
                    ?>
                </div>

            </div>
            <!-- technology-right -->
            <?php include 'parts/AsideRight.php'; ?>
        </div>
    </div>
    <?php
} else {
    ?>
    <div class="technology-1">
        <div class="container">
            <div class="col-md-12">
                <div class="business">
                    <div class=" blog-grid2">
                        <img src="images/1.jpg" class="img-responsive" alt="">
                        <div class="blog-text">
                            <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h5>
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, con sectetuer adipiscing elit. Mauris fermentum dictum magna. </p>	
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>				
                        </div>
                    </div>
                    <div class="comment-top">
                        <h2>Comment</h2>
                        <div class="media-left">
                            <a href="#">
                                <img src="images/si.png" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Richard Spark</h4>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                            <!-- Nested media object -->
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img src="images/si.png" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Joseph Goh</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                    <!-- Nested media object -->
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="images/si.png" alt="">                 
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Melinda Dee</h4>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Nested media object -->
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img src="images/si.png" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Rackham</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <h3>Leave a Comment</h3>
                        <div class=" comment-bottom">
                            <form>
                                <input type="text" placeholder="Name">
                                <input type="text" placeholder="Email">
                                <input type="text" placeholder="Subject">
                                <textarea placeholder="Message" required=""></textarea>
                                <input type="submit" value="Send">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

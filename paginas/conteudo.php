<?php
if (isset($_GET['Noticia'])) {
    echo $Artigo = $_GET['Noticia'];
}
$QueryBuscarArtigo = "
        SELECT 
        a.*, c.titulo_categoria
        FROM artigos a
        INNER JOIN categorias c
        ON a.categoria = c.id
        ";

$ExeQrBuscarArtigos = mysqli_query($conexao, $QueryBuscarArtigo);

if (mysqli_num_rows($ExeQrBuscarArtigos) > 0) {
    while ($rArtigos = mysqli_fetch_assoc($ExeQrBuscarArtigos)) {
        ?>
        <article class="col-md-3">
            <h3><?php echo $rArtigos['titulo'] ?></h3>
            <img src="img/filmes/<?php echo $rArtigos['categoria'] . '/' . $rArtigos['cover'] ?>.jpg" class="img-responsive" alt="<?php echo $rArtigos['titulo'] ?>" title="<?php echo $rArtigos['titulo'] ?>">
            <p class="lead">
                R$<?php echo $rArtigos['preco'] ?>
            </p>
            <p class="text-muted">
                Classificação: <?php echo $rArtigos['classificacao'] ?> anos
            </p>
            <p class="text-muted">
                Categoria: <?php echo $rArtigos['nome'] ?>
            </p>

            <?php
            if (isset($_SESSION['Login'])) {
                ?>
                <a href="?Link=DeleteFilme&ID=<?php echo $rArtigos['id'] ?>" class="btn btn-warning btn-sm">Apagar filme</a>
                <a href="?Link=EditarFilme&ID=<?php echo $rArtigos['id'] ?>" class="btn btn-primary btn-sm">Editar Dados</a>
                <?php
            }
            ?>
        </article>    
        <?php
    }
}
?>
<!-- technology -->
<div class="technology-1">
    <div class="container">
        <div class="col-md-9 technology-left">
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
        <!-- technology-right -->
        <div class="col-md-3 technology-right-1">
            <div class="blo-top">
                <div class="tech-btm">
                    <img src="images/banner1.jpg" class="img-responsive" alt=""/>
                </div>
            </div>
            <div class="blo-top">
                <div class="tech-btm">
                    <h4>Sign up to our newsletter</h4>
                    <p>Pellentesque dui, non felis. Maecenas male</p>
                    <div class="name">
                        <form>
                            <input type="text" placeholder="Email" required="">
                        </form>
                    </div>	
                    <div class="button">
                        <form>
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="blo-top1">
                <div class="tech-btm">
                    <h4>Top stories of the week </h4>
                    <div class="blog-grids">
                        <div class="blog-grid-left">
                            <a href="singlepage.html"><img src="images/6.jpg" class="img-responsive" alt=""/></a>
                        </div>
                        <div class="blog-grid-right">

                            <h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="blog-grids">
                        <div class="blog-grid-left">
                            <a href="singlepage.html"><img src="images/7.jpg" class="img-responsive" alt=""/></a>
                        </div>
                        <div class="blog-grid-right">

                            <h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="blog-grids">
                        <div class="blog-grid-left">
                            <a href="singlepage.html"><img src="images/11.jpg" class="img-responsive" alt=""/></a>
                        </div>
                        <div class="blog-grid-right">

                            <h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="blog-grids">
                        <div class="blog-grid-left">
                            <a href="singlepage.html"><img src="images/9.jpg" class="img-responsive" alt=""/></a>
                        </div>
                        <div class="blog-grid-right">

                            <h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="blog-grids">
                        <div class="blog-grid-left">
                            <a href="singlepage.html"><img src="images/10.jpg" class="img-responsive" alt=""/></a>
                        </div>
                        <div class="blog-grid-right">

                            <h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="clearfix"></div>
        <!-- technology-right -->
    </div>
</div>
<!-- technology -->
<!-- footer -->

</body>
</html>
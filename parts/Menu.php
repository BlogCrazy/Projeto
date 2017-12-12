<ul class="nav navbar-nav">


    <li>
        <a href="index.php">Home</a>
    </li>

    <?php
    $QueryBuscarCategorias = "SELECT * FROM categorias";
    $ExeQrBuscarCategorias = mysqli_query($conexao, $QueryBuscarCategorias);

    if (mysqli_num_rows($ExeQrBuscarCategorias) > 0) {
        while ($rCategorias = mysqli_fetch_assoc($ExeQrBuscarCategorias)) {
            ?>
            <li>
                <a href="index.php?url=<?php echo $rCategorias['titulo_categoria'] ?>"><?php echo $rCategorias['titulo_categoria'] ?></a>
            </li>
            <?php
        }
    }
    ?>
</ul>
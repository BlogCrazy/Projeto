<ul class="nav navbar-nav">

    <?php
    if (isset($_GET['url'])) {
        ?>
        <li>
            <a href="index.php">Home</a>
        </li>
        <?php
    } else {
        ?>
        <li class="active">
            <a href="index.php">Home</a>
        </li>
        <?php
    }
    ?>

    <?php
    $QueryBuscarCategorias = "SELECT * FROM categorias";
    $ExeQrBuscarCategorias = mysqli_query($conexao, $QueryBuscarCategorias);

    if (mysqli_num_rows($ExeQrBuscarCategorias) > 0) {
        while ($rCategorias = mysqli_fetch_assoc($ExeQrBuscarCategorias)) {


            if (!isset($_GET['url'])) {
                ?>
                <li>
                    <a href="index.php?url=<?php echo $rCategorias['titulo_categoria'] ?>"><?php echo $rCategorias['titulo_categoria'] ?></a>
                </li>
                <?php
            } else if ($_GET['url'] = $rCategorias['titulo_categoria']) {
                ?>
                <li class="active">
                    <a href="index.php?url=<?php echo $rCategorias['titulo_categoria'] ?>"><?php echo $rCategorias['titulo_categoria'] ?></a>
                </li>
                <?php
                while ($rCategorias2 = mysqli_fetch_assoc($ExeQrBuscarCategorias)) {
                    ?>
                    <li class="">
                        <a href="index.php?url=<?php echo $rCategorias2['titulo_categoria'] ?>"><?php echo $rCategorias2['titulo_categoria'] ?></a>
                    </li>
                    <?php
                }
            }
        }
    }
    ?>
</ul>
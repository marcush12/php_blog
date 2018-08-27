<?php require '../views/header.php'; ?>

    <div class="contenedor">
        <h2>Painel de Controle</h2>
        <a href="nuevo.php" class='btn'>Novo Post</a>
        <a href="cerrar.php" class='btn'>Sair</a>
        <?php foreach($posts as $post) : ?>
            <div class="post">
                <article>
                    <h2 class="titulo"><?php echo $post['id'] . '.-' . $post['titulo']  ;?></h2>
                    <a href="editar.php?id=<?php echo $post['id'];?>">Editar</a>
                    <a href="../single.php?id=<?php echo $post['id'];?>">Ver</a>
                    <a href="borrar.php?id=<?php echo $post['id'];?>">Apagar</a>
                </article>
            </div>
        <?php endforeach ;?>

        <?php require '../paginacion.php' ;?>
    </div>
<?php require '../views/footer.php'; ?>

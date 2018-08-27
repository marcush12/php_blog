<?php require 'header.php'; ?>

 <div class="contenedor">
     <div class="post">
        <article>
            <h2 class="titulo">Novo Artigo</h2>
            <form class='formulario' method='post' enctype='multipart/form-data' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                <input type="text" name='titulo' placeholder="Título do Post">
                <input type="text" name='extracto' placeholder="Excerto do Post">
                <textarea name="texto" placeholder="Texto do Post"></textarea>
                <input type="file" name="thumb" id="">

                <input type="submit" value="Criar Post">
            </form>
        </article>
    </div>
</div>
<?php require 'footer.php'; ?>

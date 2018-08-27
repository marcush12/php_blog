<?php require 'header.php'; ?>

<div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo">Fazer Login</h2>
                <form class='formulario' method='post' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>">
                    <input type="text" name='usuario' placeholder="Usuário">
                    <input type="password" name="password" placeholder="Senha">
                    <input type="submit" value="Fazer Login">
                </form>
            </article>
        </div>
    </div>

<?php require 'footer.php'; ?>

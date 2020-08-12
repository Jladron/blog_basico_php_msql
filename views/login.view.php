<?php require 'header.php'; ?>

<div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo">Iniciar Sesión</h2>
                <form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    <input type="text" name="usuario" placeholder="Usuario">
                    <input type="password" name="password" palceholder="contraseña">
                    <input type="submit" value="Iniciar Sesion">
                </form>
            </article>
        </div>
    </div>

<?php require 'footer.php'; ?>
<?php
include_once 'php/model/Usuario.php';
include_once 'php/model/containers/ContenedorUsuario.php';

$cUsuario = new ContenedorUsuario();

if (isset($_POST['enviar'])) {
    if ($_POST['password'] == $_POST['repite-password']) {
        $usuario = new Usuario($_POST['email'], md5($_POST['password']), 2);
        $resultado = $cUsuario->insertarUsuario($usuario);
        print_r($resultado);
        if ($resultado) {
            $claseMensaje = "success";
            $mensaje = "El registro ha sido satisfactorio";
        } else {
            $claseMensaje = "error";
            $mensaje = "No se ha creado correctamente:" . mysql_error();
        }
    } else {
        
    }
}
?>
<div class="wrapper col5">
    <div id="container">
        <form action="index.php?page=registroUsuario" method="POST">
            <fieldset>
                <p>
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Email"/>
                </p>
                <p>
                    <label for="password">Password</label>
                    <input type="password" name="password"/>
                    <label for="repite-password">Repite Password</label>
                    <input type="password" name="repite-password"/>
                </p>
                <div class="<?php echo $claseMensaje ?>"> <?php echo $mensaje ?></div>
                <input type="submit" class="btn-default" name="enviar" value="Enviar">
            </fieldset>
        </form>

    </div>
</div>

<?php require_once 'class_sistema/sistema.php';?>
<?php include 'header.php'; ?>

<div class="grid_6 push_3" id="caja_login">
    <h1><center>
      Registro<br />
      Ingrese sus datos
    </center></h1><div id="formulario_registro">
   <form method="post" class="signin" action="new_user.php">
     <div id="login">
                <fieldset class="textbox">

                  <label class="username">
                  <span>Usuario</span>
                  </label><input id="username" name="username" value="" type="text" autocomplete="on" placeholder="Usuario" required>

                <label class="username">
                <span>Email</span>
                </label><input id="email" name="email" value="" type="text" autocomplete="on" placeholder="E-mail" required>

                 <label class="password">
                <span>Contrase&ntilde;a</span>
                </label><input id="password" name="password" value="" type="password" placeholder="Contrase&ntilde;a" required>

                <input type="submit" id="go" value="Enviar">

                 <input  type="button" id="cancel"value="Cancel" onClick="window.location.href='index.php'">

               </fieldset></div>
          </form>
</div>
</div>

<?php include 'footer.php'; ?>

<?php require_once 'class_sistema/sistema.php';?>
<?php include 'header.php'; ?>
<?php
$login = new sistema();
if(isset($_POST['login'])){
   $email = strip_tags($_POST['email']);
   $password = strip_tags($_POST['password']);
   $login->login($email,$password);
}
?>
<div class="grid_6 push_3" id="caja_login">
    <h1><center>
      Ingrese a su perfil
    </center></h1>
    <div id="login">
    <form action="login.php" method="post">
    <label>Email</label><input type="email" name="email" id="email" required /><br>
    <label>Password</label><input type="password" name="password" id="password" required /><br>
    <input type="submit" name="login" id="logi" />
    <a href="registro.php" >Registrarse</a>
    </form>
    </div>
</div>

<?php include 'footer.php'; ?>

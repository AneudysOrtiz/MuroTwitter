<?php require_once 'class_sistema/sistema.php';
$nuevo = new sistema();
$comment=$_POST['comment'];
$id_message = $_POST['id_message'];
$nuevo->load_comments_ajax($id_message,$comment);
?>

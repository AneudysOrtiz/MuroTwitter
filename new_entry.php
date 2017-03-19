<?php require_once 'class_sistema/sistema.php';
$entry = new sistema();
$message = strip_tags($_POST['newentry']);
$entry->insert_entry($message);
?>

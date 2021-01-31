<? session_start();
unset($_SESSION['code']);
session_destroy();
print "<meta http-equiv=\"refresh\" content=\"0;URL=UploadClassNote.php\">";
?>

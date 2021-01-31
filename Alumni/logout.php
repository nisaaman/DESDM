<? session_start();
unset($_SESSION['reg_no']);
session_destroy();
header("Location:../Alumni.php");
?>

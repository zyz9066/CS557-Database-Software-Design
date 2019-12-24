<?
session_start();
session_unregister("id");
session_destroy();


echo "<script> alert('log out.'); </script>";
//echo "<meta http-equiv='refresh' content='0;url=./main.php'>"; //원래 코드
echo"<script> top.document.location.reload(); </script>";

exit;

?>
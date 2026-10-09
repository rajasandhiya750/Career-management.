<?php
/*
unset($_SESSION["username"]);
header("location:index.php");*/

?>

<?php
session_start();
?>

<script language='javascript'>
function log()
{<?php  
 session_destroy(); 
 header('Location:index.php');
?>
}
</script>



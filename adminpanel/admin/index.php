<?php 
session_start();
if(isset($_SESSION['admin']['adminnakalogin']) == true) header("location:home.php");

 ?>
<link rel="shortcut icon" href="favicon.jpg" type="image/x-icon"/>
<?php 

include("login-ui/index.php");


 ?>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/sweetalert.js"></script>
<?php 
setcookie('user',$user['name'], time() - 180, "/");
header('Location: /');
 ?>
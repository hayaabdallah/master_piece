<?php
session_start(); 
// $_SESSION = array();
// if (ini_get("session.use_cookies")) {
//     $params = session_get_cookie_params();
//     setcookie(session_name(), '', time() - 60*60,
//         $params["path"], $params["domain"],
//         $params["secure"], $params["httponly"]
//     );
// }
unset($_SESSION['login']); // frees all session variebles currently registers
session_destroy(); // destroy session
header("location:index.php"); //redirect to home page
?>


<?php
// PASRUTPNEW-main/logout.php
// Clear the JWT cookie by setting it with a past expiration
setcookie('token', '', time() - 3600, "/");

// (If you’re storing JWT in localStorage on the front end, you also need a JS snippet
//  to remove it client-side. E.g. have <script>localStorage.removeItem('jwt_token');</script>)

header("Location: login.html");
exit();
?>

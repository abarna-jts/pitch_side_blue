<?php
// Set a cookie to remember the user's consent for 30 days
setcookie("privacyAccepted", "true", time() + (86400 * 30), "/");
echo "Cookie set!";
?>
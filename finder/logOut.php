<?php 
// set the expiration date to one hour ago
if ($_SERVER["REQUEST_METHOD"] == "POST") {
setcookie('fiToken', "", time()-(86400 * 30000), "/");
header('Location: http://emediaptuk.com/finder/login.php');

}
else{
		header('Location: http://emediaptuk.com/finder');
}
?>
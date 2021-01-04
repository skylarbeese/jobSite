<?php
session_start();
session_unset();
if(isset($_POST['submit'])) {
    session_destroy();
    header('location: index.php?signdout');
} else {
    header('location: sign.inc.php?something want wrong');
}
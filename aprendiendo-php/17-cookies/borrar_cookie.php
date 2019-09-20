<?php

if (isset($_COOKIE['micookie'])) {
    unset($_COOKIE['micookie']);
    setcookie("micookie","",time()-100);
}

header('Location: crear_cookie.php');
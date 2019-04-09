<?php

foreach ($_POST as $key=>$post){
    $_POST[$key] = htmlentities(strip_tags(trim($post)));//protection contre les attaques js
}

include 'envoi_mail.php';